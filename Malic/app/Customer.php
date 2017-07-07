<?php

namespace Malic;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    //
    protected $table = "customer"; 
    public $timestamps = false;

    protected $fillable = array('name');
}
