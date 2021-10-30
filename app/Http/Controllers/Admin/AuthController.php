<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function showLoginForm(){

        return view('admin.index');
    }

    public function home(){
        return view('admin.dashboard');
    }

    public function login(Request $request){

        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->error("Ooops, informe todos os dados para efetuar o login")->render();
            return response()->json($json);
        }

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->error("Ooops, informe um e-mail válido para efetuar o login")->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::attempt($credentials)){
            $json['message'] = $this->message->error("Ooops, usuário e senha não conferem")->render();
            return response()->json($json);
        }

        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
