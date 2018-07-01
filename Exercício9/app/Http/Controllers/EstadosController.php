<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Auth;

class EstadosController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        return view('estados.index')->with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if( Auth::user()->type == 1 ){
            return view ('estados.create');
        }
        else {
            session()->flash('mensagem', 'Acesso negado!');
            return redirect('/estados');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //VALIDACAO
        Estado::create($request->all());

        /*$estado = new Estado;
        $estado->nome = $request->nome;  OUTRA ALTERTNATIVA PRO MÉTODO ACIMA
        $estado->sigla = $request->sigla;
        $estado->save();*/

        session()->flash('mensagem', 'Estado inserido com sucesso.');

        return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estados.show')->with('estado', $estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit')->with('estado', $estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $estado->fill($request->all());
        $estado->save();

        session()->flash('mensagem', 'Estado atulizado com sucesso.');

        return redirect()->route('estados.show', $estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado->delete();
        session()->flash('mensagem', 'Estado excluído com sucesso!');
        return redirect()->route('estados.index');
    }
}
