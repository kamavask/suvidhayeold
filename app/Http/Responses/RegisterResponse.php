<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{        
    public function toResponse($request)
    {
        // below is the existing response
        // replace this with your own code

        if ($request != null) {
            return view('customer.pages.new_customer');
        }
        
    }
}