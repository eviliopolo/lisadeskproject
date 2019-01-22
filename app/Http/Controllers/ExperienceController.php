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
}
