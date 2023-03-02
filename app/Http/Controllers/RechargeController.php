<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recharge;
use App\Models\User;
use Illuminate\Http\Request;

class RechargeController extends Controller
{
    public function recharge()
    {
        $sessionId = session()->get('id');
        $usersHead = User::where('id', $sessionId)->get();
        return view('users.recharge', [
            'users' => $usersHead
        ]);
    }

    public function rechargePrs(Request $request)
    {
        $input = $request->all();
        $result = false;
        $message = 'Không được để trống';
        if ($input != '') {
            // dd('sss');
            $input = $request->all();
            $input['user_id'] = session('id');
            $user = Recharge::create($input);

            $result = true;
            $message = 'Nạp thẻ thành công!';
        }
        return response()->json([
            'result' => $result,
            'message' => $message,
        ]);
    }
}
