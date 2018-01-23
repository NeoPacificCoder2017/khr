<?php

namespace App\Http\Controllers;

use App\UserType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTypeController extends Controller {
	public function all() {
		$userTypes = UserType::all();

    	return view('userTypes.userTypes', compact('userTypes'));
	}

	public function new() {
		return view('userTypes.userType-form');
	}

	public function create(Request $request) {
		$input = $request->all();

		$userType = new UserType();
		$userType->title = $input['userType_title'];
		$userType->save();

		$userTypes = UserType::all();

		return view('userTypes.userTypes', compact('userTypes'));
	}

	public function show($userTypeId) {
		$userType = UserType::find($userTypeId);

		return view('userTypes.userType');
	}

	public function edit($userTypeId) {
		$userType = UserType::find($userTypeId);

		return View::make('userTypes.userType-form')
					->with('userType', $userType);
	}

	public function update($userType) {
		$userType = UserType::find($userTypeId);
		$userType->title = Input::get('userType_title');
		$userType->save();
	}

	public function destroy($userTypeId) {
		$userType = UserType::find($userTypeId);
		$userType->delete();
	}

	public function deleteIndex() {
		$id = Input::get('id');
		$userType = UserType::find($id);
		$userType->delete();

		return $id;
	}
}