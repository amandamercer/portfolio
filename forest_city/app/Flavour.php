<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    protected $table = 'tbl_flavours';

    function product()
    {
    	return $this->hasMany(Product::class);
    }

}
