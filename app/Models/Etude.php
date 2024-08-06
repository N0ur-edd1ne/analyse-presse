<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    use HasFactory;

    protected $fillable = [
        'numerotationE',
        'idInputE',
        'libelleE',
        'etudeAssocieeE'
    ];

    public function communiques()
    {
        return $this->belongsToMany(Communique::class, 'cpetudes', 'idInputE', 'idInputC');
    }
}