<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class HeroController extends Controller
{
    public $base = 'https://www.superheroapi.com/api.php/2085887344887263/';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flash = Http::get($this->base.'265');
        $superman = Http::get($this->base.'644');
        $spiderman = Http::get($this->base.'620');
        $drmanhatan = Http::get($this->base.'156');
        $captainamerica = Http::get($this->base.'149');
        $scarletwitch = Http::get($this->base.'579');
        $thanos = Http::get($this->base.'655');
        $mephisto = Http::get($this->base.'443');

        return view('heroes.index', compact('flash', 'superman', 'spiderman', 'drmanhatan', 'captainamerica', 'scarletwitch', 'thanos', 'mephisto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hero)
    {
        $personaje = Http::get($this->base.$hero);

        return view('heroes.show', compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
