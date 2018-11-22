<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	protected $dates = ['eliminato'];
	const DELETED_AT = 'eliminato';
	const CREATED_AT = 'data_creazione';
	const UPDATED_AT = 'data_ultimo_aggiornamento';
	
	public function roles()
	{
		return $this->hasOne(Role::class);
	}
	
	/**
	 * @param string|array $roles
	 */
	
	public function authorizeRoles($roles)
	{
		if (is_array($roles)) {
			return $this->hasAnyRole($roles) ||
			abort(401, "Questa operazione non e' autorizzata");
		}
		return $this->hasRole($roles) ||
		abort(401, "Questa operazione non e' autorizzata");
	}
	/**
	 * Check multiple roles
	 * @param array $roles
	 */
	public function hasAnyRole($roles)
	{
		return null !== $this->roles()->whereIn(‘nome’, $roles)->first();
	}
	
	/**
	 * Check one role
	 * @param string $role
	 */
	public function hasRole($role)
	{
		return null !== $this->roles()->where(‘nome’, $role)->first();
	}
	
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'password', 'id_utente',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $table = 'bdu_utenti'; //Nome della tabella
    public $timestamps = true; // Se sono necessari i campi di orario di creazione e modifica bisogna inserirli
    protected $primaryKey = 'id_utente';//da inserire
}
