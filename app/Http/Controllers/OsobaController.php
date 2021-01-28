<?php

namespace App\Http\Controllers;

use App\Models\Osoba;
use Illuminate\Http\Request;

class OsobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$osobas = Osoba::latest('id')->paginate(5);
        //return view('osobe/index', compact('osobas')) -> with('page', (request()->input('page', 1) - 1)*5);
        $osobas = Osoba::latest('id')->get();
        return view('osobe/index', compact('osobas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('osobe/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Osoba::create($request->all());
        return redirect()->route('osobas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function show(Osoba $osoba)
    {
        return view('osobe/show', compact('osoba'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function edit(Osoba $osoba)
    {
        return view('osobe/edit', compact('osoba'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Osoba $osoba)
    {
        $osoba->update($request->all());
        return redirect()->route('osobas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Osoba $osoba)
    {
        $osoba->delete();
        return redirect()->route('osobas.index');
    }
}
