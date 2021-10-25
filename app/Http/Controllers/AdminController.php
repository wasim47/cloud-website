<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Blog;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }

     public function dashboard()
     {
	 	//$blogs = Blog::orderBy('id', 'DESC')->get();
        $totalBlogs = DB::table('blogs')->orderBy('id')->count();
        $totalOffers = DB::table('offers')->orderBy('id')->count();
        $totalUsers = DB::table('members')->orderBy('id')->count();
        $totalFaqs = DB::table('faqs')->orderBy('id')->count();

        $members = DB::table('members')->orderBy('id','DESC')->limit(5)->get();
        $blogs   = DB::table('blogs')->orderBy('id','DESC')->limit(5)->get();
        $faqs    = DB::table('faqs')->orderBy('id','DESC')->limit(5)->get();
        $offers  = DB::table('offers')->orderBy('id','DESC')->limit(5)->get();

        return view('admin.dashboard',compact('totalBlogs','totalOffers','totalUsers','totalFaqs','members','blogs','faqs','offers'));
     }
	
	 public function adminlist()
    {
        $admins = Admin::all();
        return view('admin.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
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
				'name' => 'required|string|max:255',
				'email' => 'required|string|email|max:255|unique:administrations',
				'password' => 'required|string|min:6|confirmed',
			]);

		$data = $request->all();
		//dd($data);
		Admin::create($data);
        return redirect('administrator/adminlist');
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
        $admininfo = Admin::find($id);
        return view('admin.admins.edit',compact('admininfo'));
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
				'name' => 'required|string|max:255',
				'email' => 'required|string|email|max:255|unique:administrations',
				'password' => 'required|string|min:6|confirmed',
			]);
		
        $menu = Admin::find($id);
        $menuUpdate = $request->all();
        $menu->update($menuUpdate);
        return redirect('administrator/adminlist');
    }


    public function destroy($id)
    {
        $menuItem = Admin::find($id);
        $menuItem->delete();
        return redirect('administrator/adminlist');
    }
}
