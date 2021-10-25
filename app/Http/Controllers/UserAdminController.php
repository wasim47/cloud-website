<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
//use DB;
use App\Country;

class UserAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$countries = DB::table('countries')->get();
        $countries = Country::all(['country_id', 'name']);
        return view('admin.members.create',compact('countries'));
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
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'password' => 'required|string|min:6',
        ]);

        
           if ($request->hasFile('photo')) {
            if($request->file('photo')->isValid()) {
                try {
                    $file = $request->file('photo');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
        
                    $request->file('photo')->move("admin/uploads/user/", $filename);
                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
        
                }
            } 
        }
        else{
            $filename='';
           }

        
        $member = $request->all();
        $member['photo'] = $filename;
        Member::create($member);       
        return redirect('administrator/member');
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
        $memberinfo = Member::find($id);
        $countries = Country::all();
       // return view('admin.members.create',compact('countries'));
        return view('admin.members.edit',compact('memberinfo','countries'));
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
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            //'password' => 'required|string|min:6|confirmed',
        ]);

        $menu = Member::find($id);
        $menuUpdate = $request->all();
        $menu->update($menuUpdate);
        return redirect('administrator/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuItem = Member::find($id);
        $menuItem->delete();
        return redirect('administrator/member');
    }
}
