<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_products';

    function type()
    {
    	return $this->belongsTo(Type::class);
    }

    function flavour()
    {
    	return $this->belongsTo(Flavour::class);
    }
}
