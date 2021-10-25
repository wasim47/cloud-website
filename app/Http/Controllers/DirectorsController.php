<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $directors = Director::all();

        return view('admin.directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'photo' => 'required'
        ]);

        $directorname = $request->first_name.'-'.$request->last_name;
        if ($request->hasFile('photo')) {
            if($request->file('photo')->isValid()) {
                try {
                    $file = $request->file('photo');
                    $filename = $directorname.'_'.time() . '.' . $file->getClientOriginalExtension();
        
                    $request->file('photo')->move("admin/uploads/directors/", $filename);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
        
                }
            }
        }
        else{
            $filename='';
           }

        $dir = new Director;

        $dir->first_name = $request->first_name;
        $dir->last_name = $request->last_name;
        $dir->designation = $request->designation;
        $dir->short_intro = $request->short_intro;
        $dir->address = $request->address;
        $dir->contact_no = $request->contact_no;
        $dir->email = $request->email;
        $dir->facebook_id = $request->facebood_id;
        $dir->twitter_id = $request->twitter_id;
        $dir->linkedin_id = $request->linkedin_id;
        $dir->photo = $filename;        
        $dir->created_at = date('Y-m-d H:i:s');
        $dir->updated_at = date('Y-m-d H:i:s');

        $dir->save();

        return redirect('/administrator/directors');
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
        $directorInfo = Director::find($id);
        return view('admin.directors.edit', compact('directorInfo'));
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

        $this->validate ($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            if($request->file('photo')->isValid()) {
                try {
                    $file = $request->file('photo');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
        
                    $request->file('photo')->move("admin/uploads/directors/", $filename);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
        
                }
            }
        }
        else{
            $filename='';
           }

        $directorInfo = Director::find($id);
        $directorUpdate = $request->all();
        $directorInfo->update($directorUpdate);

        return redirect('/administrator/directors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director = Director::find($id);
        $director->delete();
        return redirect('/administrator/directors');
    }
}
