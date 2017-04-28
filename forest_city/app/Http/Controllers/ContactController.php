<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;


class ContactController extends Controller
{
	public function contact() {
		return view('contact'); 
	}

	public function create(Request $request) {
		$contact = request()->all();
		
		// $data = [
		// 	'content' => $contact
		// ];
 //return response()->json($contact);
		 $validator = validator()->make($contact,[
			'name' => ['required'],
			'email' => ['required'],
			'notes' => ['required']
		]);

		 if($validator->passes()) {


		 	Mail::send('email', $contact, function($m) {
            $m->from('hello@gmail.com', 'Message from Forest City Cakes');

            $m->to('forestcitycakes@gmail.com')->subject('Message from Forest City Cakes');

            $m->setBody($contact);
        });
		 }

		 return redirect()->back()->withErrors($validator->errors())->withInput();
	}
}
