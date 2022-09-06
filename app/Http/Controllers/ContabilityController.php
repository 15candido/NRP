<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContabilityController extends Controller
{
    public $product_list = [
        'ostra',
        'tomate',
        'beringela',
        'escalada',
        'cabeceira',
        'candja',
        'badjique',
        'gasolina',
    ];

    public function index()
    {
        return view('contability.index');
    }

    public function create()
    {
        return view('contability.create');
    }
}
