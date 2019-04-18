<?php

namespace Edcursos\Http\Controllers;

use Edcursos\Aluno;
use Illuminate\Http\Request;
use Edcursos\Http\Controllers\Controller;

class AlunoController extends Controller
{

    public function index()
    {
        return Aluno::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
