<?php

namespace Malic;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
	public function customer()
	{
		return $this->hasMany('Malic\Customer', '_seller', '_id');
	}
}
