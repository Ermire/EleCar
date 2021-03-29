<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Obligé pour désigner la table visé, sinon il désigne Elecar.users (jsp pourquoi)
    protected $table='utilisateur';

    // Obligé sinon il croit qu'il existe dans la table des colonnes updated_at, created_at (jsp pourquoi)
    public $timestamps = false;

    // Obligé sinon il est duper et trouve pas la clé primaire et croit qu'elle s'appelle "id" (jsp pourquoi)
    protected $primaryKey = 'utilisateurId';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'utilisateurNom',
        'utilisateurPrenom',
        'utilisateurMdp',
        'utilisateurDateNais',
        'utilisateurEmail',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'utilisateurMdp',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
    * Get the password for the user.
    *
    * @return string
    */
    public function getAuthPassword()
    {
        return $this->utilisateurMdp;
    }

}
