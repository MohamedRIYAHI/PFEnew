<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidat extends Model
{
    protected $fillable=[
        'user_id',
        'status',
        'serie_bac',
        'annee_bac',
        'moyenne_bac',
        'montion_bac',
        'dernier_diplome',
        'annee_diplome',
        'specialite',
        'nom_etab',
        'cv',
        'lettre_motivation',
        'diplôme_BAC',
        'diplôme_BAC2_3',
        'carteNT',
        'releve_note',
    ];
    public function user()
    {
     return $this->belongsTo(User::class);
    }
    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }

    use HasFactory;
}
