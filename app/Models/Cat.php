<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    // pour empecher que quelqun envoie un input avec valeur id dans le formulaire
    protected $guarded = ['id'];

    // categories can have many courses & courses belog to one categorie
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

}
