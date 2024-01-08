<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function actionIndex()
    {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '11',
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'fornecedor 1',
                'status' => 'N',
                'cnpj' => 'xxxxxxxxxxx',
                'ddd' => '48',
                'telefone' => '00000-1000'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
