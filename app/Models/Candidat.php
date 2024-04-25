<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable=[
        'user_id',
        'serie_bac',
        'annee_bac',
        'moyenne_bac',
        'motion_bac',
        'dernier_diplome',
        'annee_diplome',
        'specialite',
        'nom_etab',
        'cv',
        'lettre_motivation'
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
