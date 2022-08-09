<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['chicken_id', 'ingredients_name', 'preparations'];

    public function chickens() {
        return $this->belongsTo('App\Models\Chicken');
    }
}
