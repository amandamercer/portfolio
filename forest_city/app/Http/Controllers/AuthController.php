<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Type;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the cms dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $types = Type::all();
        return view('home', compact('types'));
    }

    public function newProduct()
    {
        $data = request()->input();

        $validator = validator()->make($data,[
            'flavour' => ['required'],
            'description' => ['required'],
            'types' => ['required'],
        ], [

            'flavour.required' => 'Please input a name.',
            'description.required' => 'Please input a description.',
            'types.required' => 'Please select the type.'
        ]);

        if($validator->passes()) {
           $id = app('db')->table('tbl_flavours')->insertGetId([
                'flavours_name' => request()->input('flavour'),
                ]);

            app('db')->table('tbl_products')->insert([
                'flavour_id' => $id,
                'products_desc' => request()->input('description'),
                'type_id' => request()->get('types')
            ]);
            return redirect()->back()->with('message', 'You Have added a new flavour!');
        }        
        return redirect()->back()->withErrors($validator->errors())->withInput();
    }
    
}