<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @param $request Request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = [
            'scenario' => '',
            'page' => 'foo',
            'uid' => 'foo',
            'productType' => 'Hotel'
        ];

        $params = array_merge($request->query(),$params);

        $deals = (new Hotel())->getDeals($params,true);

        return view('home',compact('deals'));
    }
}
