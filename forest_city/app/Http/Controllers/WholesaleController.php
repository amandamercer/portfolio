<?php

namespace App\Http\Controllers;
use Mail;
use App\Flavour;
use App\Product;
use App\Type;
use Illuminate\Http\Request;


class WholesaleController extends Controller
{

	public function wholesale(){
	

		$classicsData = Product::with('type', 'flavour')->whereIn('type_id', ['1'])->get();
		$springsData = Product::with('type', 'flavour')->whereIn('type_id',['2'])->get();
        $fallsData = Product::with('type', 'flavour')->whereIn('type_id',['3'])->get();

       // return response()->json($classicsData);

       return view('wholesale', compact('springsData', 'fallsData', 'classicsData'));
	}

	public function create(Request $request) { //validating and submitting form into database

		$items = request()->input('flavourCounter');
		$data = request()->input();
		$validator = validator()->make($data,[
			'date' => ['required'],
			'time' => ['required'],
			// 'flavours1' => ['required'],
			'firstname' => ['required'],
			'lastname' => ['required'],
			'email' => ['required'],
			'phone' => ['required'],
			'address' => ['required'],
			'city' => ['required'],
			'province' => ['required'],
			'postalcode' => ['required']
		],[
			'date.required' => 'Please select the date.',
			'time.required' => 'Please select the time.',
			// 'flavours1.required' => 'Please select your flavour(s).',
			'firstname.required' => 'Please enter your first name.',
			'lastname.required' => 'Please enter your last name.',
			'email.required' => 'Please enter your email address.',
			'phone.required' => 'Please enter your phone number.',
			'address.required' => 'Please enter your address.',
			'city.required' => 'Please enter your city.',
			'province.required' => 'Please enter your province.',
			'postalcode.required' => 'Please enter your postal code.'
		]);

		if($validator->passes()) {
			$id = app('db')->table('tbl_orders')->insertGetId([
				'orders_delFreq' => request()->input('delivery'),
				'orders_type' => request()->input('pickup'),
				'orders_dateReq' => request()->input('date'),
				'orders_timeReq' => request()->input('time'),
				'orders_extra' => request()->input('notes'),
				'orders_package' => request()->input('packaging'),
				'orders_payOpt' => request()->input('payOpt')
				// 'contact_id' => request()->input('')
			]);
			app('db')->table('tbl_contact')->insert([
                'contact_fname' => request()->input('firstname'),
                'contact_lname' => request()->input('lastname'),
                'contact_conName' => request()->input('conName'),
                'contact_busName' => request()->input('busName'),
                'contact_email' => request()->input('email'),
                'contact_phone' => request()->input('phone'),
                'contact_street' => request()->input('address'),
                'contact_city' => request()->input('city'),
                'contact_province' => request()->input('province'),
                'contact_postalCode' => request()->input('postalcode'),
                'contact_delStreet' => request()->input('delStreet'),
                'contact_delCity' => request()->input('delCity'),
                'contact_delProvince' => request()->input('delProvince'),
                'contact_delPostal' => request()->input('delPostal'),
                'orders_id' => $id
            ]);

		for($i=1; $i<=$items; $i++) {
		$fieldname = 'flavours'.$i;
		$fieldqty = 'quantity'.$i;
			app('db')->table('lt_ordersFlavours')->insert([
				'orders_id' => $id,
				'flavours_id' => request()->get($fieldname),
				'flavours_quantity' => request()->input('quantity'.$i)
			]);
		}
	}

		//return redirect('pages/home')
		return redirect()->back()->withErrors($validator->errors())->withInput();


        Mail::send('wholesale', $data, function ($m) {
            $m->from('hello@gmail.com', 'Wholesale Order from Forest City Cakes');

            $m->to('forestcitycakes@gmail.com')->subject('Your Reminder!');
        });


	}

}
