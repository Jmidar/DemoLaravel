<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //use for Routing

    public function index(){

    	$user = array('Jmi','Jmidar',' ');
    	$hello = 'no'; 
    	//return view('demo',array("lol"=>$user, "hi"=>$hello));
    	return view('demo',compact("user","hello"));
    }
}