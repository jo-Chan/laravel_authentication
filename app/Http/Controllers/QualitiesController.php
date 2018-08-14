<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;
use App\Quality;

class QualitiesController extends Controller
{

    // Add Crush Quality
    public function create($id)
    {
        $crush = Crush::find($id);
        $quality = new Quality();

        return view('crushes.quality', array(
            'qualities' => $quality,
            'crush'     => $crush
        ));
    }

    // Save Crush Quality
    public function store(Request $request)
    {
        $quality =  new Quality();
        $quality -> crush_id = $request -> route('id');
        $quality -> quality  = $request -> quality;
        $quality -> save();

        return redirect()->route('crushes.id.show', array('id' => $quality -> crush_id)); 
    }

    // Delete Crush Quality
    public function destroy($id)
    {
        //
    }

}
