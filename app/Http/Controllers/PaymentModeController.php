<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaymentMode;

class PaymentModeController extends Controller
{
    public function all(){
        $paymentmode = PaymentMode::all();
        dump($paymentmode); 
        return view('paymentmode');
    }

    public function show($paymentmodeId){
        $paymentmode = PaymentMode::find($paymentmodeId);
        dump($paymentmode);
        return view('paymentsmode');
    }

    public function new(){
        return view('paymentmode-form');
    }

    public function create(Request $request){
        //dump($request->input['user_id']);die;
        // $userNew = new UserPaymentMode();
        // $userNew->user_id = $request->$input['user_id'];
        // $userNew->payment_mode_id = $request->$input['payment_mode_id'];
        // $userNew->save();
			$input = $request->all();
			$paymentmode = new PaymentMode();
			$paymentmode ->name = $input['name'];
			$paymentmode ->save();
			
			return view('paymentmode-create-confirmation');
    }

    public function destroy(Request $request){
        $input = $request->all();
			$paymentmode = new PaymentMode();
			$paymentmode ->delete();
        return view('paymentmode-delete');
    }
}
