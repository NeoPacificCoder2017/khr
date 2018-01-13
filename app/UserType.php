<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model {
	public function user_types() {
		return $this->belongsTo('User');
	}
}