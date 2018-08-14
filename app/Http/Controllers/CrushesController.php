<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;
use App\Quality;
use Carbon\Carbon;

class CrushesController extends Controller
{
    // View Crushes
    public function index()
    {
        $crushes = Crush::all();
        
        return view('crushes/index', array('crushes' => $crushes));
    }

    // Create Crush
    public function create()
    {
        $crush = new Crush();
        return view('crushes.create', array(
            'crush'      => $crush,
            'action'     => route('crushes.store'),
            'submit_text'=> "Create Crush"));
    }

    // Save Crush
    public function store(Request $request)
    {
        $crush = new Crush();
        $this -> setandSaveCrushData($crush, $request);
        
        return redirect()->route('crushes.index'); 
    }
    
    // Save function for store and update
    private function setAndSaveCrushData($crush, $request){

        $request->validate([
            'first_name'      => 'required|alpha',
            'last_name'       => 'required|alpha',
            'fb_profile_link' => 'required|url',
            'contact_number'  => 'required|digits:11',
        ]);

        $crush =  new Crush();
        $crush -> first_name      = $request -> first_name;
        $crush -> last_name       = $request -> last_name;
        $crush -> fb_profile_link = $request -> fb_profile_link;
        $crush -> contact_number  = $request -> contact_number;
        $crush -> created_at      = Carbon::now();
        $crush -> updated_at      = Carbon::now();
        $crush -> save();
    }

    // View Crush information
    public function show($id)
    {
        $crush = Crush::find($id);
        $quality = Quality::all();
        
        return view('crushes.show', array(
            'crush'     => $crush,
            'qualities' => $quality));
    }

    // Edit Crush
    public function edit($id)
    {
        $crush = Crush::find($id);
        
        return view('crushes.create', array(
            'crush'        => $crush,
            'action'       => route('crushes.id.update', array('id'=>$crush->id)),
            'submit_text'  => "Update Crush")
        );
    }
    
    // Updates edited Crush
    public function update(Request $request, $id)
    {
        $crush = new Crush();
        $this -> setandSaveCrushData($crush, $request);
        
        return redirect()->route('crushes.index'); 
    }

    // Delete Crush
    public function destroy($id)
    {
        $quality = quality::find($id);
        $quality -> delete();
        
        return redirect() -> route('crushes.id.show');
    }
}
