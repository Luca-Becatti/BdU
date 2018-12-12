<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Http\Requests;
use DataTables;
use Illuminate\Support\Facades\Storage;
use App\Parere;
use App\Gispratiche;
use DB;
use Auth;

class ParereController extends Controller
{

	
	public function index(){
		
		$pareri = DB::table('bdu_commissione_pareri')->whereNull('bdu_commissione_pareri.eliminato')
		->leftjoin('bdu_gis_pratiche', 'bdu_gis_pratiche.aqbce', '=', 'bdu_commissione_pareri.aqbce')
		->select('bdu_commissione_pareri.*', 'bdu_gis_pratiche.localita')
		->get();
		
     // $pareri = Parere::all();
        return view('pareri.list', compact('pareri'));
	}
	
	public function trashcanIndex(){

		
		$pareri = Parere::onlyTrashed()
		->get();
	
		// $pareri = Parere::all();
		return view('pareri.trashlist', compact('pareri'));
	}
	
	public function listStati(){
		
		$stati =['' => 'Seleziona uno stato'] + Parere::lists('stato')->toArray();
		return $stati;
	}
	
	public function aggiungiParere(Request $req){
		$rules = array(
				'title' => 'required',
				'body' => 'required',
		);
		$validator = Validator::make (input::all(), $rules);
		if ($validator->fails())
			return response::json(array('errors' => $validator->getMessageBag()->toarray()));
		
			else {
				$parere = new Parere;
				$parere->save();
				return response()->json($post);
			}
		
	}
	
	public function editPost(request $request){
		$post = Post::find ($request->id);
		$post->title = $request->title;
		$post->body = $request->body;
		$post->save();
		return response()->json($post);
	}
	
	public function deletePost(request $request){
		$post = Parere::find ($request->id)->delete();
		return response()->json();
	}
	
	public function create()
	{
		return view('pareri.form', ['action' => 'create']);
	}
	
	public function show($id)
	{
        $parere = Parere::find($id);
        return view('pareri.dettaglio', ['parere' => $parere]);
	}
	
	public function showWithGis($id,$ubicazione)
	{
		$parere = Parere::find($id);
		$parere->localita = $ubicazione;
		//dd($parere->documento);
		return view('pareri.dettaglio', ['parere' => $parere]);
	}
	
	public function showTrashed($id)
	{
		$parere = Parere::onlyTrashed()->where('id_commissione_pareri',$id)->get()->first();
		return view('pareri.dettaglio', ['parere' => $parere]);
	}
	
	public function destroy($id)
	{
		$parere = Parere::withTrashed()->where('id_commissione_pareri', $id)->first();
		if ($parere->trashed()) {
			$parere->forceDelete();
			return redirect('pareri');
		} else {
			$parere->delete();
			return redirect('pareri');
		}
	}

	
	public function store(Request $request)
	{
		if ($request->hasFile('documento')){

			$filename = $request->file('documento')->getClientOriginalName();
			$request->file('documento')->storeAs('documents',$filename);
			//$url = public_path('app/public/documents/' . $filename);
		} 
		/*$gispratiche = Gispratiche::whereHas('gispratiche', function($q){
    														$q->where('codice_gis', '=', $request->aqbce);
																		})->get(); */
		
		//$pratica = Gispratiche::where('codice_gis', '=', $request->aqbce)->first();
		//dd($pratica->localita);
		//$ubicazione = 
		//$flag_export = 0;
		//$flag_export_normalized = sprintf("%02d", $flag_export); 
		//$us_normalized = sprintf("%02d", $request->us); 
		//$cod_us = "$request->aqbce"."$us_normalized";
		//$id_cp = "$cod_us"."$request->numero_cp";
		//$controllo_flag = "$id_cp"."$flag_export_normalized";
		$this->val($request);
		//$user_id = Auth::user()->id_utente;
		
		          
		$parere = Parere::create($request->all());
		$parere->utente_id = Auth::user()->id_utente;
		$parere->documento = $filename;
		$parere->save();
		return redirect('pareri');                                                                                                                                   
	}
	
	public function edit($id)
	{
		$parere = Parere::withTrashed()->find($id);

		if ($parere->$id) {
			return view('pareri.form', ['action' => 'edit', 'parere' => $parere]);
		} else {
			return view('pareri.form', ['action' => 'edit', 'parere' => $parere]);
		}
		
	}
	
	public function restore($id)
	{
		$parere = Parere::withTrashed()->find($id)->restore();
		return redirect('cestino');
	}
	
	public function update(Request $request, $id)
    {
    	if ($request->hasFile('documento')){
    	
    		$filename = $request->file('documento')->getClientOriginalName();
    		$request->file('documento')->storeAs('documents',$filename);
    		//$url = public_path('app/public/documents/' . $filename);
    	}
		
    	$isCheckedRichiestaPP = $request->has('richiesta_progetto_preliminare');    	
    	$isCheckedEdificioIncongruo = $request->has('edificio_incongruo');
    	$this->val($request);    	
    	$parere = Parere::withTrashed()->find($id);
    	$parere->aqbce = $request->get("aqbce");
    	$parere->stato = $request->get("stato");
    	$parere->us = $request->get("us");
    	$parere->numero_cp = $request->get("numero_cp");
    	$parere->data_cp = $request->get("data_cp");   	
    	$parere->esito = $request->get("esito");
    	$parere->notifica_parere_finale = $request->get("notifica_parere_finale");
    	$parere->scadenza= $request->get("scadenza");
    	$parere->richiesta_progetto_preliminare = $isCheckedRichiestaPP;
    	$parere->edificio_incongruo = $isCheckedEdificioIncongruo;
    	$parere->argomenti_discussi = $request->get("argomenti_discussi");
    	$parere->note = $request->get("note");
    	$parere->numero_protocollo = $request->get("numero_protocollo");
    	$parere->data_protocollo = $request->get("data_protocollo");
    	$parere->documento = $filename;
    	$parere->utente_id = Auth::user()->id_utente;
    	$parere->save();
    	return view('pareri.form', ['action' => 'edit', 'parere' => $parere]);
    }
	
	private function val($request) {
		$messages = [
				'aqbce.required' => 'Aqbce obbligatorio',
				'aqbce.between' => "L'Aqbce deve essere di 5 cifre",
				'aqbce.size' => "L'Aqbce deve essere di 5 cifre",
				'esito.required' => 'Esito richiesto',
				'stato.required' => 'Stato richiesto',
				'us.required' => 'US obbligatoria',
				'us.max' => 'Il numero della us deve essere massimo di 2 cifre',
				'us.numeric' => 'Questo campo deve essere di tipo numerico',
				//'numero_cp.required' => 'Numero della commissione pareri obbligatorio',
				'numero_cp.required' => 'Il numero della commissione deve essere presente',
				'numero_cp.max' => 'Il numero della commissione deve essere massimo di 5 cifre',
				'numero_cp.numeric' => 'Questo campo deve essere di tipo numerico',
				'data_cp.required' => 'Il campo data è obbligatorio',
				//il campo Edificio_incongruo non è necessario perchè quando non viene passato il valore di default è 0. 
		];
		$this->validate($request, [
				'aqbce' => 'required|between:12,12',
				'esito' => 'required',
				'stato' => 'required',
				'us' => 'required|max:2',
				'numero_cp' => 'required|max:5',
				'data_cp' => 'required|date_format:Y-m-d',
		], $messages);
	}
	
	public function get_commissioni()
	{

		$pareri = DB::table('bdu_commissione_pareri')->whereNull('bdu_commissione_pareri.eliminato')
		->leftjoin('bdu_gis_pratiche', 'bdu_gis_pratiche.aqbce', '=', 'bdu_commissione_pareri.aqbce')
		->select('bdu_commissione_pareri.*', 'bdu_gis_pratiche.localita')
		->get();
	
	
			
		return Datatables::of($pareri)
		->addColumn('action', function ($parere) {
	
			if ($parere->documento){
	
				return '<div style ="display:inline-flex" id="outer">
					<a href="pareri/'.$parere->id_commissione_pareri.'/edit" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-pencil"></a>
					<a href="#" id="'.$parere->id_commissione_pareri.'" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-trash-o delete"></a>
					<a href="pareri/'.$parere->id_commissione_pareri.'/'.$parere->localita.'" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-plus-circle"></a>
					<a href="/storage/documents/'.$parere->documento.'" style= "margin-right: 0.333em !important; background: #88b9c0 !important; padding: 0.2em 0.6em;" class="dt-button fa fa-floppy-o" id = "open"></a>
					</div>';
			}
			else {
				return '<div style ="display:inline-flex" id="outer">
					<a href="pareri/'.$parere->id_commissione_pareri.'/edit" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-pencil"></a>
					<a href="#" id="'.$parere->id_commissione_pareri.'" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-trash-o delete"></a>
					<a href="pareri/'.$parere->id_commissione_pareri.'/'.$parere->localita.'" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-plus-circle"></a>
				    <a href="#" onClick="alertDocument();return false;" style= "margin-right: 0.333em !important; padding: 0.2em 0.6em;" class="dt-button fa fa-floppy-o" id = "open"></a>
					</div>';
	
			}
		})
			
		->make(true);
			
	}
	
	
	function deleteAjax(Request $request){
			
		//$name = $request->input( 'prova' );
	
		$parere = Parere::find($request->input('prova'));
	
		if($parere->delete())
		{
			echo 'Data Deleted';
		}
			
	}
	
    /**
     * Create a new controller instance.
     *
     * @return void
     */

}
