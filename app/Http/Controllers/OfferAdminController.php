<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Country;
use App\Categorie;

class OfferAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $offers = Offer::all();
        return view('admin.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$countries = Country::all(['country_id', 'name']);        
        $categories = Categorie::all(['id', 'cat_name']);
        return view('admin.offers.create', compact('countries','categories'));
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
				'points' => 'required|string',
			]);

		   
		 if($request->hasFile('photo')) {
			if($request->file('photo')->isValid()) {
				try {
					$file = $request->file('photo');
					$filename = time() . '.' . $file->getClientOriginalExtension();
		
					$request->file('photo')->move("admin/uploads/offer/", $filename);
				} catch (Illuminate\Filesystem\FileNotFoundException $e) {
		
				}
			} 
		}
		else{
		   	$filename='';
		   }
		   
		   
		$btitle = $request->title;
        $m = new Offer;
        $m->title = $btitle;
		$m->image = $filename;
        $m->action_link = $request->action_link;
		$m->points = $request->points;
        $m->allowed_country = $request->allowed_country;
        $m->rewards_amount = $request->rewards_amount;
        $m->category = $request->category;
        $m->note = $request->note;
        $m->full_desc = $request->full_desc;
        $m->created_at = date('Y-m-d H:i:s');
        $m->updated_at = date('Y-m-d H:i:s');
        $m->save();
       // $offer = $request->all();
        //Offer::create($offer);
        return redirect('administrator/offer');
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
        $offerinfo = Offer::find($id);
        $countries = Country::all(['country_id', 'name']);        
        $categories = Categorie::all(['id', 'cat_name']);

        return view('admin.offers.edit',compact('offerinfo','countries','categories'));
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
				'points' => 'required|string',
			]);

		/*if($request->hasFile('photo')) {
			if($request->file('photo')->isValid()) {
				try {
					$file = $request->file('photo');
					$filename = time() . '.' . $file->getClientOriginalExtension();
		
					$request->file('photo')->move("admin/uploads/offer/", $filename);
				} catch (Illuminate\Filesystem\FileNotFoundException $e) {
		
				}
			} 
		}
		else{
		   	$filename='';
		   }*/
		
        $menu = Offer::find($id);
        $menuUpdate = $request->all();
	    //dd($menuUpdate);
        $menu->update($menuUpdate);
        return redirect('administrator/offer');
    }


    public function destroy($id)
    {
        $menuItem = Offer::find($id);
        $menuItem->delete();
        return redirect('administrator/offer');
    }
}
