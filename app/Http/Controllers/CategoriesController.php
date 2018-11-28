<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view ('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $category = new Category(array(
            'description'=>$request->get('description'),
            'visible'=>$request->get('visible')
        ));
        
        if ($category->visible == "on")
            $category->visible  = 1;
        else 
            $category->visible  = 0;
        $category->save();

        return redirect ('/categories')->with('status','Nueva categoria creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('id', '=', $id)->firstOrFail();
        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->firstOrFail();
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        
        
        $descriptionnew = $request->get('description');
        $visiblenew = $request->get('visible');
        $category = Category::find($id);

        $category->description = $descriptionnew;
        $category->visible  = $visiblenew;

        $category->Save();

        return redirect ('/categories')->with('status','Categoria modificada');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id', '=', $id);
        $category->delete();
        return Redirect('/categories')->with('status','La categoria ' .$id . ' ha sido eliminada');
    }
}
