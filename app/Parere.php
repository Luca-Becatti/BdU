<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parere extends Model
{
	protected $table = 'bdu_commissione_pareri';
	protected $primaryKey = 'id_commissione_pareri';
	public $timestamps = false;
    //
}

