<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'prenom',
        'email'

    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
}
