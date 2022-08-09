<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chicken extends Model
{
    use HasFactory;

    protected $fillable = ['menu_name', 'description'];

    public function ingredients() {
        return $this->hasMany('App\Models\Ingredient');
    }
}
