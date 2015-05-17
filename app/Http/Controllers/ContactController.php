<?php namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;

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
        if (Request::has('name'))
        {
            //
        }
        $data = ['success' => true];
		return view('json',['data' => $data]);
	}

}
