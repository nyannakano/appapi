<?php


namespace App\Http\Controllers;

use App\Models\FormaPagamento;

class FormasPagamentoController extends BaseController
{

    public function __construct()
    {
        $this->classe = FormaPagamento::class;
    }

}
























//public function agenda()
//{
//
//    $agenda = Agenda::all();
//    return [
//        $agenda
//    ];
//}
//
//public function store(Request $request)
//{
//
//    return response()->json(Agenda::create([
//        'titulo' => $request->titulo,
//        'hora_inicio' => $request->hora_inicio,
//        'hora_final' => $request->hora_final,
//    ]), 201);
//
//
//}
//
//public function show(int $id)
//{
//    $agendamento = Agenda::find($id);
//
//    if(is_null($agendamento)) {
//        return response()->json('Agendamento não existe', 404);
//    }
//
//    return response()->json($agendamento, 202);
//}
//
//public function update(Request $request)
//{
//    $agendamento = Agenda::find($request->id);
//
//    if(is_null($agendamento)) {
//        return response()->json('Agendamento não existe', 404);
//    }
//
//    $agendamento->titulo = $request->titulo;
//    $agendamento->hora_inicio = $request->hora_inicio;
//    $agendamento->hora_final = $request->hora_final;
//    $agendamento->save();
//
//    return response()->json($agendamento, 201);
//}
//
//public function destroy($id)
//{
//    $agendamentosRemovidos = Agenda::destroy($id);
//
//    if($agendamentosRemovidos === 0) {
//        return response()->json('Agendamento não foi removido, tente novamente', 404);
//    }
//    elseif ($agendamentosRemovidos === 1) {
//        return response()->json('Agendamento removido com sucesso', 202);
//    }
//    else {
//        return response()->json($agendamentosRemovidos . "agendamentos removidos com sucesso", 201);
//    }
//}
