<?php

namespace App\Models;

use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable,Messagable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>*
     */

    protected $table= 'users';

     protected $fillable = [
        'nom',
        'nom_arabe',
        'prenom',
        'prenom_arabe',
        'email',
        'email_verified_at',
        'password',
        'cin',
        'cne',
        'phone',
        'phone2',
        'photo',
        'sexe',
        'date_naissance',
        'lieu_naissance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];




    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function chefs(){
        return $this->hasMany(Chef::class);
    }

    public function candidat()
    {
        return $this->hasMany(Candidat::class);
    }
}
