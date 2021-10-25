<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenusController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create');
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
            'menuname'=>'Required'
        ]);

        $mname = $request->menuname;
        $slug=strtolower(implode('-', explode(' ', $mname)));
        $m = new Menu;
        
        $m->slug = $slug;
        $m->menuname = $request->menuname;
		$m->menu_type = $request->menu_type;
        $m->status = $request->status;
        $m->sequence = $request->sequence;
        $m->created_at = date('Y-m-d H:i:s');
        $m->updated_at = date('Y-m-d H:i:s');
        $m->save();

        return redirect('/administrator/menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('admin.menus.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'menuname'=>'Required'
        ]);


        $menu = Menu::find($id);
        $slug = strtolower(implode('-', explode(' ', $request->menuname)));
       //$menuUpdate = $request->all();
        // array_push($menuUpdate, $menuUpdate['slug'])
        //$menuUpdate['slug'] = $slug;
        //dd($menuUpdate);
        // $menuUpdate->menuname = $request->menuname;
        // $menuUpdate->slug = $slug;
        // $menuUpdate->sequence = $request->sequence;
        // $menuUpdate->status = $request->status;
        

        $menuUpdate = array(
            'menuname'=>$request->menuname,            
            'sequence'=>$request->sequence,
            'status'=>$request->status,
            'slug'=>$slug
        );

       //dd($menuUpdate);
        $menu->update($menuUpdate);
        return redirect('/administrator/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuItem = Menu::find($id);
        $menuItem->delete();
        return redirect('/administrator/menus');
    }
}
