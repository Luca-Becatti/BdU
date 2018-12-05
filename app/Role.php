<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
		public function users()
		{
		  return $this->belongsToMany(User::class);
		}
		
		protected $table = 'bdu_ruoli'; //Nome della tabella
		public $timestamps = false; // Se sono necessari i campi di orario di creazione e modifica bisogna inserirli
		protected $primaryKey = 'id_ruolo';
		
}
