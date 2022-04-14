<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthService extends BaseService
{
    public $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login($request)
    {
        $data = $request->only('email','password');
        if(Auth::attempt($data))
        {
          return true;
        }
        else
        {
             return false;
        }
    }

    public function register($request)
    {
        $data = $request->only('name', 'email', 'password', 'role_id', 'phone');
        $data['password'] = Hash::make($data['password']);
        $this->authRepository->createUser($data);
    }

}
