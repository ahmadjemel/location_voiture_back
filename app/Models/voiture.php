<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Unique;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable=[
        'immatricule',
        'nbr_place',
        'nbr_port',
        'nbr_CV',
        'marque_id',
        'modele',
        'kilometrage',
        'carburant',
        'photo',
        'prix',


    ];
    public function marque(){
        return $this->belongsTo(Marque::class);

    }
    public function reservations(){
        return $this ->hasMany(Reservation::class);
    }

}

