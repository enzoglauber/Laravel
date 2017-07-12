<?php

namespace Malic;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    //
    protected $table = "customer"; 
    public $timestamps = false;

    protected $fillable = array('name', 'email', '_seller'); //somente esses campos podem ser inseridos

	public function seller()
	{
		return $this->belongsTo('Malic\Seller', '_seller');
	}
}
