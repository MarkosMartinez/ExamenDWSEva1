<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use Illuminate\Http\Request;


class ManzanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manzanas = Manzana::all();
        return view('manzanas', [
            'manzanas' => $manzanas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addmanzana');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipomanzana' => 'required|string|max:24',
            'preciokilo' => 'required|max:10',
        ]);

        Manzana::create([
            'tipomanzana' => $request->tipomanzana,
            'preciokilo' => $request->preciokilo
        ]);

        return redirect('/manzanas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manzana $manzana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $manzana = Manzana::find($id);
        if($manzana){
            return view('modificarmanzana', [
                'manzana' => $manzana
            ]);
        }else{
            return redirect('/manzanas');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manzana $manzana)
    {
        $request->validate([
            'id' => 'required',
            'tipomanzana' => 'required|string|max:24',
            'preciokilo' => 'required|max:10',
        ]);
        $manzana = Manzana::find($request->input('id'));
        if($manzana){
        $manzana->update([
            'tipomanzana' => $request->input('tipomanzana'),
            'preciokilo' => $request->input('preciokilo'),
        ]);
        }
        return redirect('/manzanas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $manzana = Manzana::find($request->input('id'));;
        $manzana->delete();
        return redirect("/manzanas");
    }
}
