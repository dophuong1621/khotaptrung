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
        
        $recharge = Recharge::where('user_id', $sessionId)->orderBy('id', 'desc')->limit(5)->get();

        return view('users.recharge', [
            'users' => $usersHead,
            'recharge' => $recharge
        ]);
    }

    public function rechargePrs(Request $request)
    {
        $input = $request->all();
        $result = false;
        $message = 'Bạn chưa chọn nhà mạng';
        $recharge = '';
        if ($request->type_charge != '') {
            $result = false;
            $message = 'Bạn chưa chọn mệnh giá thẻ';
            $recharge = '';
            if ($request->money_received != '') {
                $result = false;
                $message = 'Bạn chưa nhập mã thẻ';
                $recharge = '';
                if ($request->pin != '') {
                    $result = false;
                    $message = 'Bạn chưa nhập số serial';
                    $recharge = '';

                    if ($request->serial != '') {
                        $input = $request->all();
                        $input['user_id'] = session('id');
                        $user = Recharge::create($input);

                        $recharge = Recharge::where('user_id', session('id'))->orderBy('id', 'desc')->limit(5)->get();
                        $result = true;
                        $message = 'Nạp thẻ thành công!';
                    }
                }
            }
        }
        return response()->json([
            'result' => $result,
            'message' => $message,
            'recharge' => $recharge
        ]);
    }
}
