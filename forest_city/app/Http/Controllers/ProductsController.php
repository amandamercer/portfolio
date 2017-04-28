<?php

namespace App\Http\Controllers;

use App\Flavour;
use App\Product;
use App\Type;


class ProductsController extends Controller
{
	public function products() {
		
		$classic = Product::with('type', 'flavour')->whereIn('type_id', ['1'])->get();
		$springSum = Product::with('type', 'flavour')->whereIn('type_id',['2'])->get();
        $winterFall = Product::with('type', 'flavour')->whereIn('type_id',['3'])->get();

       //return response()->json($classic);

        return view('products', compact('springSum', 'winterFall', 'classic'));
	}
}
