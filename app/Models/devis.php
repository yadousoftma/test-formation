<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class devis extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'id_client' ,
        'date' ,
        'numero_devis' ,

    ];

    public function get_element_devis(){
        return $this->hasMany(ElementsDevis::class, 'id_devis');
    }
}
