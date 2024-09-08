<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UserController\StoreUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use App\Utils\ResponseHandler;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard.index');
        }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
            return redirect()->route('admin.dashboard.index');
        }

        return back()->withErrors([
            'error' => '!! Por favor verifique sus credenciales !!',
        ])->withInput();
    }
    public function showRegister()
    {
        return view('admin.auth.register');
    }

    public function register(StoreUserRequest $request, UserService $userService)
    {
        try {
            $user = $userService->createUser($request->name, $request->email, $request->password);
            //   Auth::login($user);
            return redirect()->route('admin.dashboard.index');
        } catch (\Exception $e) {
            return ResponseHandler::error($e->getCode(), $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('customer.home');
    }
}
