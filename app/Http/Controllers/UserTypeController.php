<?php

namespace App\Http\Controllers;

use App\UserType;
use App\Http\Controllers\Controller;

class UserTypeController extends Controller {
	public function all() {
		$userType = UserType::all();

		dump($userType);

    return view('userTypes.userTypes');

		//return UserType::all();
	}

	public function new() {
		return view('userTypes.userType-form');
	}

	public function create(Request $request) {
		$input = $request->all();

		$userType = new UserType();
		$userType->title = $input['userType_title'];
		$userType->save();
	}

	public function show($userTypeId) {
		$userType = UserType::find($userTypeId);

		dump($userType);

		return view('userTypes.userType');
	}

	public function edit($userTypeId) {
		$userType = UserType::find($userTypeId);

		return View::make('userTypes.userType-form')
					->with('userType', $userType);
	}

	public function update($userType) {
		$userType = UserType::find($userTypeId);
		$userType->title = Input::get('userType_newTitle');
		$userType->save();
	}

	public function destroy($userTypeId) {
		$userType = UserType::find($userTypeId);
		$userType->delete();
	}
}