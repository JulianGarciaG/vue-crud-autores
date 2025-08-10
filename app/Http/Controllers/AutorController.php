<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Autor::orderBy("nombre", "ASC")->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = Autor::create([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
            "ciudad_natal" => $request->ciudad_natal,
            "created_at"=> now(),
            "updated_at"=> now()
        ]);
        return response()->json($autor,Response::HTTP_CREATED);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $autor = Autor::find($id);
        $autor -> delete();
    }
}
