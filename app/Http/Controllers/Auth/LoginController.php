<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $userName = $request->get('username');
        $password = $request->get('password');
        $result = false;
        $message = 'Không được để trống';
        // dd(md5($password));die();
        if ($userName != '' && $password != '') {
            $login = User::where(['password' => md5($password), 'username' => $userName])->first();
            if (!$login) {
                $result = false;
                $message = 'Sai tên đăng nhập hoặc mật khẩu!';
            } else {
                $request->session()->put('id', $login->id);
                $request->session()->put('username', $login->username);

                $result = true;
                $message = 'Đăng nhập thành công';
            }
        }
        return response()->json([
            'result' => $result,
            'message' => $message,
        ]);
    }

    public function logout(Request $request)
    {
        // xoá session
        $request->session()->flush();
        //điều hướng
        return Redirect::route("home");
    }
}
