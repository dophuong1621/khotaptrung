<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Spatie\ResponseCache\Facades\ResponseCache;
use Spatie\ResponseCache\Replacers\CsrfTokenReplacer;
class LoginController extends Controller implements CsrfTokenReplacer
{
    public function login(Request $request)
    {
        $userName = $request->get('username');
        $password = $request->get('password');
        $result = false;
        $message = 'Không được để trống';
        // dd(md5($password));die();
        if ($userName != '' && $password != '') {
            $login = User::where('username', $userName)->first();
            if (!$login) {
                $result = false;
                $message = 'Sai tên đăng nhập!';
            } else {
                $result = false;
                $message = 'Sai mật khẩu!';
                if (Hash::check($password, $login->password)) {
                    $request->session()->put('id', $login->id);
                    $request->session()->put('username', $login->username);
                    // setcookie('user', $login->id, time() + (86400 / 24 / 60 * 30), "/");
                    $result = true;
                    $message = 'Đăng nhập thành công';
                }
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
