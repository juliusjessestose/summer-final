<?php

namespace App\Http\Controllers;

use App\Models\Chicken;
use Illuminate\Http\Request;

class ChickenController extends Controller
{
    public function index()
    {
        $chickens = Chicken::with('ingredients')->get();

        return inertia('Chicken', [
            'chickens' => $chickens
        ]);   
    }

}

