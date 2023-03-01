<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $input = $request->all();
        if ($request->all() != '') {
            $checkUser = User::where('username', $request->username);
            dd($checkUser);
            // if ($checkUser == NULL) {
            // var_dump('ss');
            //     $user = User::create($input);
            //     $request->session()->put('id', $user->insert_id);
            //     $request->session()->put('username', $request->username);
            //     return Redirect::route('/');
            // }
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
