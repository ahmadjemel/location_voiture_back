<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'voiture_id',
        'date_debut',
        'date_fin',
     

    ];
    protected $dates=['date_debut','date_fin'];
    protected $dateFormat='Y-m-d';
    public function voiture(){
        return $this->belongsTo(Voiture::class,'voiture_id');
    }
    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }

}
