<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Parere;

class ParereController extends Controller
{

	
	public function index(){
		
		$pareri = Parere::all();
		return View::make('pareri.index')->with('bdu_commissione_pareri', $pareri);
	}
	
	public function store(Request $request)
	{
		$this->val($request);
		Parere::create($request->all());
		return redirect('/tables');
	}
	
	private function val($request) {
		$messages = [
				'aqbce.required' => 'Nome categoria obbligatorio',
				'esito.required' => 'Esito richiesto',
				'us.required' => 'us obbligatorio',
		];
		$this->validate($request, [
				'aqbce' => 'required',
				'esito' => 'required',
				'us' => 'required',

		], $messages);
	}
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */

}
