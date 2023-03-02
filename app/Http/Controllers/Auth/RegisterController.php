<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if ($request->all() != '') {
            $checkUser = User::where('username', $request->username)->first();
            // dd($checkUser);
            if ($checkUser == NULL) {
                $input = $request->all();
                $input['password'] = Hash::make($request->password);
                $user = User::create($input)->id;
                // dd(Hash::make($request->password));

                $request->session()->put('id', $user);
                $request->session()->put('username', $request->username);
                return Redirect::route('home');
            }
        }
        return Redirect::route("home");
    }

    public function logout(Request $request)
    {
        // xoá session
        $request->session()->flush();
        //điều hướng
        return Redirect::route("trang-chu");
    }
}
