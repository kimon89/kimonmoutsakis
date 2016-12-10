<?php namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Message;
use Mail;

class ContactController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Contact Controller
	|--------------------------------------------------------------------------
	|
	| This controller is responsible for handling all the contact requests such
	| as the ajax post request from the contact form
	|
	*/

	/**
	 * The endpoint for the contact form.
	 * Returns a json string with the outcome
	 * @return Response
	 */
	public function message(MessageRequest $request)
	{
		//get the data
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
		
		//save the message
		$message_model = new Message();
		$message_model->name = $name;
		$message_model->email = $email;
		$message_model->message = $message;

		
		//send email
		$message_info = 'From: ' . $email . ' - ' . $name . ' ';
		$message_body = $message;
		Mail::send('emails.message', ['message_info' => $message_info,'message_body' => $message_body], function($message) use ($email,$name){
			$message->from($email, $name . ' - kimonmoutsakis.com');
			$message->to('moutsakisk@gmail.com', 'Kimon')->subject('New Message!');
		});
	
		return view('json',['data' => ['success' => $res]]);
	}

}
