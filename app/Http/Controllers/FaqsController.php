<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administration');
    }
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.create');
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
            'question'=>'Required',
            'answer'=>'Required',
        ]);

        $faq = new Faq;
        
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->tag = $request->tag;
        $faq->created_at = date('Y-m-d H:i:s');
        $faq->updated_at = date('Y-m-d H:i:s');
        $faq->save();

        return redirect('/administrator/faqs');
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
        $faqData = Faq::find($id);
        return view('admin.faqs.edit',compact('faqData'));
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
            'question'=>'Required',
            'answer'=>'Required',
        ]);

        $faq = Faq::find($id);

        $faqUpdate = array(
            'question'=>$request->question,
            'answer'=>$request->answer,
            'tag'=>$request->tag,
            'updated_at'=>date('Y-m-d H:i:s')
        );
        $faq->update($faqUpdate);

        return redirect('/administrator/faqs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/administrator/faqs');
    }
}
