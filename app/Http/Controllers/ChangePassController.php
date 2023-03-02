<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
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
        $id = session('id');
        $user = User::find($id);
        if(Hash::check($request->currentPass,$user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with("success", "Password changed successfully!");
        }
        else{
            return back()->with('error', 'Sai mật khẩu cũ ');
        }

    }
}
