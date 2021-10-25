<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategoryController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $categories = Categorie::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'cat_name'=>'Required'
        ]);
       
        $catquer = $request->all();
		Categorie::create($catquer);
        return redirect('/administrator/categories');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $category = Categorie::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cat_name'=>'Required'
        ]);


        $category = Categorie::find($id);
        $slug = strtolower(implode('-', explode(' ', $request->cat_name)));
        $categoryUpdate = array(
            'cat_name'=>$request->cat_name,
        );

       //dd($CategoryUpdate);
        $category->update($categoryUpdate);
        return redirect('/administrator/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryItem = Categorie::find($id);
        $categoryItem->delete();
        return redirect('/administrator/categories');
    }
}
