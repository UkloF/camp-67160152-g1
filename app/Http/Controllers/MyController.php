<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Controller
    // MyController()

    function index(){

        return view('myviews.index');
    }
    function info(Request $req){
        echo $req->input('mynumber');
        return view('myviews.info');
    }

    function calculate(Request $req){
        // echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myviews.calculate',$data);
    }

}
