<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;


class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
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
				'banner_title' => 'required|string',
				'banner_image' => 'required|image',
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
		   
		   
		   if ($request->hasFile('banner_image')) {
			if($request->file('banner_image')->isValid()) {
				try {
					$file = $request->file('banner_image');
					$filename = time() . '.' . $file->getClientOriginalExtension();
		
					$request->file('banner_image')->move("admin/uploads/banner/", $filename);
				} catch (Illuminate\Filesystem\FileNotFoundException $e) {
		
				}
			} 
		}
		else{
		   	$filename='';
		   }
		   
		   
		$btitle = $request->banner_title;
        $m = new Banner;
        $m->banner_title = $btitle;
		$m->banner_image = $filename;
        $m->created_at = date('Y-m-d H:i:s');
        $m->updated_at = date('Y-m-d H:i:s');
        $m->save();
        //$bn = $request->all();
       //Banner::create($bn);
        return redirect('administrator/banner');
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
        $bloginfo = Banner::find($id);
        return view('admin.banners.edit',compact('bloginfo'));
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
      if ($request->hasFile('banner_image'))
      {
            $file = $request->file('banner_image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString()); 
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $data->banner_image = $name;
            $file->move("admin/uploads/banner/", $name);   
            $data->save();                  
        }  
		else{
			$name = $request->banner_image;
		}
		   
		$arrayuval = array('banner_title'=>$request->banner_title,'banner_image'=>$name,'updated_at'=>date('Y-m-d H:i:s'));
		$collection = Banner::where('id',$id);
		$data = $collection->get();
		$collection->update($arrayuval);								
        return redirect('administrator/banner');
    }


    public function destroy($id)
    {
        $menuItem = Banner::find($id);
        $menuItem->delete();
        return redirect('administrator/banner');
    }
}
