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
    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}
