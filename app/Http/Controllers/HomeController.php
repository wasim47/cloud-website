<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;
use App\Blog;
use App\Faq;
use App\Director;
use App\Country;
use App\Member;
use App\Subscription;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutcont = Content::where(['menu_id' => 5])->first();
        $menus = Menu::all();
        return view('frontend.home', compact('menus','aboutcont'));
    }

      public function pages()
    {
		$aboutcont = Content::where(['menu_id' => '5'])->first();
       $menus = Menu::all();
       $segment = request()->segment(2);
       $exp=explode('-', $segment);
       $imp=implode(' ', $exp);
       $currentMenu = ucfirst($imp);

       $mid = Menu::where(['slug' => $segment])->pluck('id')->first();

       if(isset($mid) && ($mid == Content::where(['menu_id' => $mid])->pluck('menu_id')->first())){
            $content = Content::where(['menu_id' => $mid])->first();
            $title = $content->title;
            $content = $content->content;
        }else{
            $content = "";
            $title = '';
            $content = '';
        }       


        //$blogs = Blog::all();
        $blogs = Blog::orderBy('id', 'DESC')->get();
        $faqs = Faq::all();
        $directors = Director::all();

        switch ($segment) {
           case 'faq':
               return view('frontend.faq', compact('menus','faqs','currentMenu','aboutcont'));
               break;
           case 'blog':
              return view('frontend.blog', compact('menus','blogs','currentMenu','aboutcont'));
               break;
           default:
               return view('frontend.article', compact('title','content','menus','currentMenu', 'directors','aboutcont'));
               break;
       }

    }

    public function single(Blog $single){
		$aboutcont = Content::where(['menu_id' => '5'])->first();
        $menus = Menu::all();
        $segment = request()->segment(3);

        $blogdetails = Blog::where(['slug' => $segment])->first();
        return view('frontend.single', compact('menus','blogdetails','aboutcont'));

       }

    public function addComment(Request $request){
    
      $com = new  Comment;
      $com->blog_id = $request->blog_id;
      $com->username = $request->username;
      $com->usermail = $request->usermail;
      $com->comment_title = $request->comment_title;
      $com->comment_msg = $request->comment_msg;
      $com->created_at = date('Y-m-d H:i:s');
      $com->updated_at = date('Y-m-d H:i:s');
      $com->save();
      return back();

    }

     ///////////////////////// Registration  /////////////////////
    public function showRegistrationForm()
    {
     $aboutcont = Content::where(['menu_id' => '5'])->first();
     $menus = Menu::all();
     $countries = Country::all(['country_id', 'name']);
      return view('frontend.user.user-registration',compact('menus','countries','aboutcont'));
    }



    public function register(Request $request)
    {
      
         $this->validation($request);

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
        return redirect('user/register')->with('Status','Successfully Registered');
    }

    public function validation($request){
        return  $this->validate($request, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'password' => 'required|string|min:6',
        ]);
    }
	
	
	
	
	
	
	
	
	
	 public function subscribe(Request $request)
     {
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:subscriptions',
        ]);
        $subscrip = $request->all();
        Subscription::create($subscrip);      
        return redirect('/')->with('Status','Successfully Registered');
    }

}
