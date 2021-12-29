<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fonecedor 1', 
                'status' => 'N', 
                'cnpj' => ''
            ],
            1 => [
                'nome' => 'Fonecedor 2', 
                'status' => 'S'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
