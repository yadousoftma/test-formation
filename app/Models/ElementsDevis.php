<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ElementsDevis extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [            "id_devis",
        "id_produit",
        "qte",
    ];

    public function get_produit(){
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}
