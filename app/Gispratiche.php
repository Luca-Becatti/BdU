<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gispratiche extends Model
{
	use SoftDeletes;
	protected $dates = ['eliminato'];
	const DELETED_AT = 'eliminato';
	const CREATED_AT = 'data_creazione';
	const UPDATED_AT = 'data_ultimo_aggiornamento';
	
	public function pareri() {
		
		return $this->hasMany('App\Parere', 'aqbce_id', 'id_commissione_pareri');
	}
	
	public function findUbicazione (){
		
		$pratica = App\Gispratiche::where('importo_richiesto', $$this->aqbce)->first();
		return $pratica->localita;
		
	}

		
    	protected $table = 'bdu_gis_pratiche'; //Nome della tabella
		protected $primaryKey = 'id_gis_pratiche';
		public $timestamps = false; // Se sono necessari i campi di orario di creazione e modifica bisogna inserirli
}
