<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;
use Carbon\Carbon;

class CrushesController extends Controller
{
    public function index()
    {
        $crushes =Crush::all();
        
        return view('crushes/index', array('crushes' => $crushes));
    }

    public function create()
    {
        $crush = new Crush();
        return view('crushes.create', array(
            'crush'      =>$crush,
            'action'     =>route('crushes.store'),
            'crush'      =>$crush,
            'action'     =>route('crushes.store'),
            'submit_text'=>"Create Crush"));
    }

    public function store(Request $request)
    {
        $crush = new Crush();
        $this -> setandSaveCrushData($crush, $request);
        
        return redirect()->route('crushes.index'); 
    }
    
    private function setAndSaveCrushData($crush, $request){
        $crush = new Crush();
        $crush -> first_name = $request->first_name;
        $crush -> last_name = $request->last_name;
        $crush -> fb_profile_link = $request->fb_profile_link;
        $crush -> contact_number = $request->contact_number;
        $crush -> created_at = Carbon::now();
        $crush -> updated_at = Carbon::now();
        $crush -> save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $crush = Crush::find($id);
        
        return view('crushes.create', array(
            'crush'        => $crush,
            'action'       => route('crushes.id.update', array('id'=>$crush->$id)),
            'submit_text'  => "Update Crush")
        );
    }

    public function update(Request $request, $id)
    {
        $crush = new Crush();
        $this -> setandSaveCrushData($crush, $request);
        
        return redirect()->route('crushes.index'); 
    }

    public function destroy($id)
    {
        $crush = Crush::find($id);
        $crush -> delete();
        
        return redirect() -> back();
    }
}
