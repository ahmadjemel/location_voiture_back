<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_debut',
        'date_fin',
        'saison',

    ];
    public function voiture(){
        return $this->belongsTo(Voiture::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }

}
