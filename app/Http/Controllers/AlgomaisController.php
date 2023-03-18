<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vestuario;

class AlgomaisController extends Controller
{
    public function index()
    {

        $algomais = Vestuario::all();

        return view('algomais.index', compact('vestuarios'));
    }

    public function create()
    {

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
