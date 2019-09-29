<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
    	return "Setting admin";
    }
    public function show($id = 1){
    	if ($id>10) {
    		$result = "Lon hon 10";
    	}else{
    		$result = "Nho hon 10";
    	}
    	return view('welcome')->with('result',$result);
    }
}
