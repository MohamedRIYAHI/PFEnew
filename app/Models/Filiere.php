<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{

    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'type'
    ];
    public function chef()
{
 return $this->hasOne(Chef::class);
}

}
