<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;

class ContentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $contents = Content::all();
        return view('admin.contents.index',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all(['id', 'menuname']);
        return view('admin.contents.create', compact('menus'));
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
            'title'=>'Required',
            'menu_id'=>'Required',
        ]);

        $content = new Content;
        
        $content->title = $request->title;
        $content->content = $request->content;
        $content->menu_id = $request->menu_id;
        $content->created_at = date('Y-m-d H:i:s');
        $content->updated_at = date('Y-m-d H:i:s');
        $content->save();

        return redirect('/administrator/contents');
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
        $contentData = Content::find($id);
        $menus = Menu::all();
        $mid = $contentData->menu_id;
        $menuData = Menu::find($mid);
        return view('admin.contents.edit',compact('contentData', 'menus','menuData'));
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
            'title'=>'Required',
            'menu_id'=>'Required',
        ]);

        $content = Content::find($id);

        $contentUpdate = array(
            'title'=>$request->title,
            'content'=>$request->content,
            'menu_id'=>$request->menu_id,
            'updated_at'=>date('Y-m-d H:i:s')
        );
        $content->update($contentUpdate);

        return redirect('/administrator/contents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect('/administrator/contents');
    }
}
