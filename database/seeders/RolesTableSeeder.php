<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Role::truncate(); */
        
        Role::create(['name' => 'admin',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create(['name' => 'developer',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create(['name' => 'employee',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create(['name' => 'deliverymen',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create(['name' => 'servicemen',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create(['name' => 'vendor',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create(['name' => 'customer',
            'description' => 'description',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
