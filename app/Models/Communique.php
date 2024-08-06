<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communique extends Model
{
    use HasFactory;

    protected $fillable = [
        'numerotationC',
        'idInputC',
        'libelleC',
        'etudeAssocieeC'
    ];

    public function etudes()
    {
        return $this->belongsToMany(Etude::class, 'cpetudes', 'idInputC', 'idInputE');
    }
}