<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Redirect;

class ChangePassController extends Controller
{
    public function repass()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.repass', [
            'users' => $usersHead
        ]);
    }

    public function updatePass(Request $request)
    {
        $curPass = $request->get('currentPass');
        $id = session('id');
        $userPass = User::find($id);

        if (md5($curPass) == ($userPass->password)) {
            $update = User::find($id);
            $update->password = md5($request->rePassword);
            $update->save();
            return back()->with("success", "Password changed successfully!");
        } else {
            return back()->with('error', 'Sai mật khẩu cũ ');
        }
    }
}
