<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoImc extends Model
{
    public function calcular() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $imc = $peso / ($altura * $altura);
        $imc = number_format($imc, 2, '.', '');
        return $imc;
    }
}
