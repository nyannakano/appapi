<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class BaseController
{
    protected $classe;

    public function index()
    {
        $recurso = $this->classe::all();
        return [
            $recurso
        ];
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        return response()->json($this->classe::create($dados), 201);


    }

    public function show(int $id)
    {
        $recurso = $this->classe::find($id);

        if (is_null($recurso)) {
            return response()->json('Um erro ocorreu, verifique e tente novamente', 404);
        }

        return response()->json($recurso, 202);
    }

    public function update(Request $request)
    {
        $recurso = $this->classe::find($request->id);

        if (is_null($recurso)) {
            return response()->json('Um erro ocorreu, verifique e tente novamente', 404);
        }

        $recurso->fill($request->all());
        $recurso->save();

        return response()->json($recurso, 201);
    }

    public function destroy($id)
    {
        $recursosRemovidos = $this->classe::destroy($id);

        if ($recursosRemovidos === 0) {
            return response()->json('Um erro ocorreu, verifique e tente novamente', 404);
        } elseif ($recursosRemovidos === 1) {
            return response()->json('Removido com sucesso', 202);
        } else {
            return response()->json($recursosRemovidos . "removidos com sucesso", 201);
        }
    }
}
