<?php

namespace App\Http\Controllers;

use App\Models\CalculoImc;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function index() {
        return view('calculo');
    }

    public function calculoImc() {
        $CalculoImc = new CalculoImc();
        
        $imc = $CalculoImc->calcular();

        return view('resultado', ['ValorImc' => $imc]);
    }
}
