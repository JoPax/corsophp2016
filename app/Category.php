<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function announces() {
		return $this->hasMany('App\Announce');
	}
}
