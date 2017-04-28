<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'tbl_type';

    function product()
    {
    	return $this->hasMany(Product::class);
    }
}
