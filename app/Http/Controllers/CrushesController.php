<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;

class CrushesController extends Controller
{
    public function index()
    {
        $crushes =Crush::all();
        
        return view('crushes/index', array('crushes' => $crushes));
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
