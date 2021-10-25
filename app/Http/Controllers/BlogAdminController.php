<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
				'title' => 'required|string',
				'full_desc' => 'required|string',
				'short_desc' => 'required|string',
			]);

		  /* if(Request::file('photo'))
			{
            $image = Request::file('photo');
            $filename  = time().'.'. $image->getClientOriginalExtension();
            $path = public_path('admin/uploads/blog/' . $filename);
			Image::make($image->getRealPath())->resize(200, 200)->save($path);
           }
		   else{
		   	$filename='';
		   }*/
		   
		   
		   if ($request->hasFile('photo')) {
			if($request->file('photo')->isValid()) {
				try {
					$file = $request->file('photo');
					$filename = time() . '.' . $file->getClientOriginalExtension();
		
					$request->file('photo')->move("admin/uploads/blog/", $filename);
				} catch (Illuminate\Filesystem\FileNotFoundException $e) {
		
				}
			} 
		}
		else{
		   	$filename='';
		   }
		   
		   
		$btitle = $request->title;
        //$slug = implode('-', explode(' ', $mname));
        $slug=strtolower(implode('-', explode(' ', $btitle)));
        $m = new Blog;
        //$request['slug'] = $slug;
       // $menu = $request->all();
        $m->slug = $slug;
        $m->title = $btitle;
		$m->image = $filename;
        $m->short_desc = $request->short_desc;
        $m->full_desc = $request->full_desc;
        $m->created_at = date('Y-m-d H:i:s');
        $m->updated_at = date('Y-m-d H:i:s');
        $m->save();
       // $blog = $request->all();
        //Blog::create($blog);
        return redirect('administrator/blog');
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
        $bloginfo = Blog::find($id);
        return view('admin.blogs.edit',compact('bloginfo'));
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
            'title' => 'required|string',
            'full_desc' => 'required|string',
            'short_desc' => 'required|string',
        ]);
		
        $menu = Blog::find($id);
        $menuUpdate = $request->all();
        $menu->update($menuUpdate);
        return redirect('administrator/blog');
    }


    public function destroy($id)
    {
        $menuItem = Blog::find($id);
        $menuItem->delete();
        return redirect('administrator/blog');
    }
}
