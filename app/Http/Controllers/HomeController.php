<?php namespace App\Http\Controllers;

use Calendar;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$event = Calendar::event(
			"Valentine's Day", //event title
			true, //full day event?
			'2015-02-14', //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
			'2015-02-14' //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
			, //optional event ID
			[
				'url' => 'http://full-calendar.io'
			]
		);

		return view('home', compact('event'));
	}

}
