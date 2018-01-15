<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserPaymentMode;

class UserPaymentModeController extends Controller
{
    public function all(){
        $userpayment = UserPaymentMode::all();
        
        dump($userpayment);
        
        return view('userpaymentmode.userpaymentmode');
    }

    public function show($userpaymentId){
        $userpayment = UserPaymentMode::find($userpaymentId);
        dump($userpayment);
        return view('userpaymentmode.userpaymentmodes');
    }

    public function new(){
        return view('userpaymentmode.userpaymentmode-form');
    }

    public function create(Request $request){
        //dump($request->input['user_id']);die;
        // $userNew = new UserPaymentMode();
        // $userNew->user_id = $request->$input['user_id'];
        // $userNew->payment_mode_id = $request->$input['payment_mode_id'];
        // $userNew->save();
			$input = $request->all();

			$newUser = new UserPaymentMode();
			$newUser->user_id = $input['user_id'];
			$newUser->payment_mode_id = $input['payment_mode_id'];
			$newUser->save();
			
			return view('userpaymentmode.userpaymentmode-create-confirmation');
    }
}
