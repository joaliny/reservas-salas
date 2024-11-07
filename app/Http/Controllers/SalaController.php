<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = Sala::all();
        return view('salas.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable',
            'situacao' => 'required|boolean',
        ]);
    
        Sala::create($request->all());
    
        return redirect()->route('salas.index')->with('success', 'Sala criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
{
    return view('salas.edit', compact('sala'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $sala)
{
    $request->validate([
        'nome' => 'required',
        'descricao' => 'nullable',
        'situacao' => 'required|boolean',
    ]);

    $sala->update($request->all());

    return redirect()->route('salas.index')->with('success', 'Sala atualizada com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
