<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'filiere_id'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function filiere(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->belongsTo(Filiere::class);
    }
}
