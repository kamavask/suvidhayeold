<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use App\Models\Role_user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(
                User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                ]), /* function (User $user) {
                $this->createTeam($user);
            } */
                function (User $user) {
                    $this->role_user($user);
                },
                function (User $user) {
                    Mail::to($user->email)->send(new WelcomeMail());
                }
            );
        });
    }

    public function role_user(User $user)
    {
        $r_u = new Role_user();
        $r_u->user_id = $user->id;
        $r_u->role_id = 7;
        $r_u->save();
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    /* protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    } */
}
