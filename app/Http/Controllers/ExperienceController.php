<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $data = Experience::orderBy('id')->paginate(10);
        return response()->json($data);
    }

    public function create()
    {
        return view('experiences.create');
    }

    public function store(ExperienceFormRequest $request)
    {
        $experience = new Experience(array(
            'description'=>$request->get('description'),
            'visible'=>$request->get('visible'),
            'file'=>$request->get('file'),
        ));
        
        if ($experience->visible == "on")
            $experience->visible  = 1;
        else 
            $experience->visible  = 0;
        
        $experience->pathImage  = "0";

        $ruta = Storage::disk('public')->putFileAs('experiences',$request->file,'photo.jpg');        
                
        $experience->save();

        return redirect ('/experiences')->with('status','Nueva experiencia creada');
    }




}
