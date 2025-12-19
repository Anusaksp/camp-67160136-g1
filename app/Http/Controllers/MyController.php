<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    function __construct()
    {

    }

    function index(Request $request){
        return view('myviews.index', compact('request'));
        //return '<h1>My Controller</h1>';
    }

    function info(){
        return view('myviews.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myviews.calculate', $data);
    }

}
