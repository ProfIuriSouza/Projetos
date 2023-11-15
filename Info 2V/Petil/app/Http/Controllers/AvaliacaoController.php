<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Avaliacao;
class AvaliacaoController extends Controller
{

    public function index(){
        return view('index');
        }
    public function show(string $id): View
    {
        return view('avaliacoes', [
            'avaliacao' => Avaliacao::findOrFail($id)
        ]);
    }

    public function store(Request $request)
{
    $data = [
        'interface' => $request->input('interface'),
        'usabilidade' => $request->input('usabilidade'),
        'facilidade' => $request->input('facilidade'),
        'comentario' => $request->input('comentario'),
    ];

    Avaliacao::create($data);

    return redirect('index');
}

}
