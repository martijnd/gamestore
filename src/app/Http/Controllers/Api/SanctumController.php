<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use \Illuminate\Support\Facades\Hash;

class SanctumController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function user(Request $request)
    {
        return $request->user();
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws ValidationException
     */
    public function token(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken($request->device_name)->plainTextToken;
    }
}
