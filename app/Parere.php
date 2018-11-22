<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Parere extends Model
{

	use SoftDeletes;
	protected $dates = ['eliminato'];
	const DELETED_AT = 'eliminato';
	const CREATED_AT = 'data_creazione';
	const UPDATED_AT = 'data_ultimo_aggiornamento';
	
	//public $timestamps = false; // Se non fossero necessari i campi di creazione e modifica
	
	public function gispratiche()
	{
		return $this->belongsTo('App\Gispratiche', 'aqbce_id', 'id_gis_pratiche');
	}
	
	protected $table = 'bdu_commissione_pareri'; //Nome della tabella
	protected $primaryKey = 'id_commissione_pareri';
    protected $fillable = [
    	'aqbce',
    	'stato', 
    	'us',
    	'numero_cp',
    	'data_cp',
    	'esito',
    	'richiesta_progetto_preliminare',
    	'notifica_parere_finale',
    	'scadenza',
    	'note',
    	'edificio_incongruo',
    	'argomenti_discussi',
    	'utente_id',
    	'documento',
    	'numero_protocollo',
    	'data_protocollo',
    		
    ];
    
    //sovrascrivere la funzione di salvataggio in modo che venga automaticamente aggiunto l'id dell'utente autenticato
    public function save(array $options = array())
    {
    	if( ! $this->utente_id)
    	{
    		$this->utente_id = Auth::user()->id_utente;
    	}
    
    	parent::save($options);
    }
    
    
}

