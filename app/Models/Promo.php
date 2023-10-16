<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    public function inscriptions(){

    return $this->belongsToMany(Eleve::class, 'inscriptions');
    }

    public function diplome(){

        return $this->belongsTo(Diplome::class);
    }
}
