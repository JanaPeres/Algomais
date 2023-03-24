<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vestuario;

class VestuariosController extends Controller
{
    public function index()
    {
        $vestuarios = Vestuario::all();

        return view('vestuarios.index', compact('vestuarios'));
    }

    public function create()
    {
        return view('vestuarios.create');
    }
    public function store(Request $requisicao)
    {
        $vestuario = new Vestuario();

        // Preenche os campos do objeto com os dados da requisição
        $vestuario->vestidos = $requisicao->vestidos;
        $vestuario->preco = $requisicao->preco;
        $vestuario->tamanho = $requisicao->tamanho;
        $vestuario->cor = $requisicao->cor;
        $vestuario->observacao = $requisicao->observacao;


        // Salva o objeto no banco de dados
        $vestuario->save();

        // Redireciona para a página de detalhes do gato
        return redirect()->route('vestuarios.show', $vestuario->id);
    }

    public function show(Vestuario $vestuario)
    {
        return view('vestuarios.view', compact('vestuario'));
    }

    public function edit(Vestuario $vestuario)
    {
        return view('vestuarios.edit', compact('vestuario'));
    }


    public function update(Request $requisicao, Vestuario $vestuario)
    {
        $vestuario->update($requisicao->all());

        return redirect()->route('vestuarios.show', $vestuario->id);
    }

    public function destroy($id)
    {

    }

}
