<?php namespace App\Http\Controllers;


class WelcomeController extends Controller {



	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{


		dd(getenv('DB_DATABASE') );

		$ini_array = parse_ini_file("../sample.ini", TRUE);
		echo "<pre>";
		$config = $ini_array[111]["items"];


		$items  = explode(",", $config);

		foreach($items as $item){

			echo $ini_array[111][$item]["style"]."<br/>";
			echo $ini_array[111][$item]["items"];

			echo " <br/>--- <br/>";
		}

	}

}
