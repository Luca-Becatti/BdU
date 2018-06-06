<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parere extends Model
{
	protected $table = 'bdu_commissione_pareri'; //Nome della tabella
	protected $primaryKey = 'id_commissione_pareri';
    protected $fillable = [
        'controllo_flag',
        'flag_export',
    	'id_cp',
    	'cod_us',
    	'aqbce',
    	'stato', 
    	'us',
    	'numero_cp',
    	'data_cp',
    	'esito',
    	'richiesta_progetto_preliminare',
    	'notifica_parere_finale',
    	'scadenza_30_giorni',
    	'note',
    	'edificio_incongruo',
    	'argomenti_discussi',
    	'ubicazione',
    	'indirizzo_presidente',
    	'indirizzo_tecnici',
    	'campo_extra',
    ];
    
	public $timestamps = false; // Se sono necessari i campi di orario di creazione e modifica bisogna inserirli
    
}

