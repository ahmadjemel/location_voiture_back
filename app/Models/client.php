<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable=[
        'cin','nom','prenom','tel','email','adresse','age'
    ];
    public function reservations(){
        return $this->belongsTO(Reservation::class);
    }
}
