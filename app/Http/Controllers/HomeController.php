<?php

namespace App\Http\Controllers;

use App\Facades\Commons\CommonService;
use App\Traits\Sharable;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    use Sharable;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Test function
     */
    public function test()
    {
//        echo CommonService::testFacades();
        echo $this->share("Thang");
    }

}
