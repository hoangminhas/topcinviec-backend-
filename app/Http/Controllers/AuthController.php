<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;


class AuthController extends Controller
{
    public $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login (Request $request)
    {
      if ( $this->authService->login($request))
      {
          return response()->json(
              [
                  'status'=>201,
                  'msg'=>'Dang nhap thanh cong'
              ]
          );
      }
      else
      {
          return response()->json(
              [
                  'status'=>false,
                  'msg'=>'Sai ten toan khoan hoac mat khau'
              ]
          );
      }
    }

    public function register(RegisterRequest $request)
    {

        $this->authService->register($request);
        return response()->json('create user success', 201);
    }

}
