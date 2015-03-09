<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class BackendController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $results = DB::table('products')->select('name', 'price', 'brand', 'image')->where('clustered', '=', 0)->take(1)->get();
        $x = view('backend.cluster')->withProduct($results[0]);
        return $x;

    }

    public function create()
    {


        return redirect('/cluster');

    }

}
