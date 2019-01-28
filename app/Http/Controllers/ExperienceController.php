<?php

namespace App\Http\Controllers;
use App\Http\Requests\ExperienceFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'unitValue'=>$request->get('unitValue'),
            'file'=>$request->get('file'),
            'unitId' => 1
        ));            

        $ruta = Storage::disk('public')->putFileAs('experiences',$request->file,'photo.jpg');        
        $experience->pathImage  = $ruta;
                
        $experience->save();

        return redirect ('/categories')->with('status','Nueva experiencia creada');
    }




}
