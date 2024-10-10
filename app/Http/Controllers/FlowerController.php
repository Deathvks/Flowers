<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Flower;

class FlowerController extends Controller
{
    public function index(){
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }

    public function create(){
        return view('flowers.create');
    }

    public function store(Request $request){
        $flower = new Flower;
        $flower->species = $request->input('species');
        $flower->color = $request->input('color');
        $flower->save();

        return redirect()->route('flowers.index');
    }
}
