<?php

namespace App\Http\Controllers;


use App\Parere;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PareriController extends Controller
{

	
	public function index(){
		
		$pareri = Parere::all();
		return View::make('pareri.index')->with('bdu_commissione_pareri', $pareri);
	}
    /**
     * Create a new controller instance.
     *
     * @return void
     */

}
