<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable=[
        'candidat_id',
        'verification'
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
