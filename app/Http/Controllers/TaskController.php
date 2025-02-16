<?php

namespace App\Http\Controllers;

use App\Models\Veiculo; // Model para a tabela motos
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function motos()
    {
        // Pega todos os dados da tabela veiculos onde o tipo é 'MOTO'
        $motos = Veiculo::where('tipo', 'MOTO')->get(); 
        return view('motos', compact('motos')); // Passa os dados para a view
    }

    public function carros()
    {
        // Pega todos os dados da tabela veiculos onde o tipo é 'CARRO'
        $carros = Veiculo::where('tipo', 'CARRO')->get(); 
        return view('carros', compact('carros')); // Passa os dados para a view
    }
}


