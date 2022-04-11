<?php

namespace App\Http\Controllers\Website;

use App\Models\Blog;
use App\Models\User;
use App\Models\Contact;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class WebsiteBlogController extends Controller
{
   public function BlogView($id){
    //    dd($id);
    $contacts = Contact::first();
    $blogs = Blog::find($id);
    //  dd($blogs);
    if ($blogs) {
        return view('website.pages.blog.Blog',compact('blogs','contacts'));
    }

    else
    return "Blog not found!";
       
    }
    public function BlogAdd(){
        $user=User::all();
        $location=Location::all();
        
        return view('website.pages.Blog.UserAddBlog',compact('user','location'));
    }
    public function Blogstore(Request $request){

        $request->validate([
            'Date'=>'after_or_equal:today',
            
           
        ]);
        $BlogImagefile='';
        if($request->hasFile('BlogImage')){
            $file=$request->file('BlogImage');
            $BlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/',$BlogImagefile);
        }
        $SecondBlogImagefile='';
        if($request->hasFile('SecondBlogImage')){
            $file=$request->file('SecondBlogImage');
            $SecondBlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/secondimage/',$SecondBlogImagefile);
        }
        $ThirdBlogImagefile='';
        if($request->hasFile('ThirdBlogImage')){
            $file=$request->file('ThirdBlogImage');
            $ThirdBlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/thirdimage/',$ThirdBlogImagefile);
        }
        Blog::create([
            'BlogName'=>$request->BlogName,
            'location_id'=>$request->Location,
            'Date'=>$request->Date,
            'user_id'=>$request->blogger_name,
            'Blogimage'=>$BlogImagefile,
            'SecondBlogimage'=>$SecondBlogImagefile,
            'ThirdBlogimage'=>$ThirdBlogImagefile,
         
            'Description'=>$request->Description,
            'Description2'=>$request->Description2,
            'Description3'=>$request->Description3

        ]);
        return redirect()->back()->with('msg','Blog created Successfully.Wait for admin approval.');
    }
    public function ViewBlogUser(){
        $contacts = Contact::first();
        $Blogs=Blog::with('user','location')->where('status','approved')->get();
        // dd($tourplans);
        return view('website.pages.home',compact('Blogs','contacts'));

    }

    //user blog list show
    public function MyBlogList(){
        $contacts=Contact::first();
        $blogs=Blog::with('user','location')->where('user_id',auth()->user()->id)->get();
        // dd($joinedplan);
        return view('website.pages.Blog.My-blog-list',compact('blogs','contacts'));
    }

//user blog edit
public function MyBlogEdit($blog_id){
   
    $user=User::all();
    $location=Location::all();
    $blog=Blog::find($blog_id);
    return view('website.pages.Blog.MyBlogEdit',compact('blog','user','location'));

}
public function UpdateMyblog(Request $request,$blog_id){
 

    $blog=Blog::find($blog_id);
    $blogimage=$blog->Blogimage;
    if($request->hasFile('BlogImagefile'))
    {
$blogimage=date('Ymdhis').'.'.$request->file('BlogImagefile')->getClientOriginalExtension();
$request->file('BlogImagefile')->storeAs('/uploads/Blogs',$blogimage);
    }
    $secondblogimage=$blog->SecondBlogimage;
    if($request->hasFile('SecondBlogimage')){
        $secondblogimage=date('Ymdhis').'.'.$request->file('SecondBlogimage')->getClientOriginalExtension();
        $request->file('SecondBlogimage')->storeAs('/uploads/Blogs/secondimage/',$secondblogimage);
    }
    $thirdblogimagefile=$blog->ThirdBlogimage;
    if($request->hasFile('ThirdBlogImagefile')){
        $thirdblogimagefile=date('Ymdhis').'.'.$request->file('ThirdBlogImagefile')->getClientOriginalExtension();
        $request->file('ThirdBlogImagefile')->storeAs('/uploads/Blogs/thirdimage/',$thirdblogimagefile);
    }

   $blog->update([
    'BlogName'=>$request->BlogName,
    'location_id'=>$request->Location,
    'Date'=>$request->Date,
    'user_id'=>$request->blogger_name,
    'Blogimage'=>$blogimage,
    'SecondBlogimage'=>$secondblogimage,
    'ThirdBlogimage'=>$thirdblogimagefile,
    'Description'=>$request->Description,
  
    'Description2'=>$request->Description2,
    'Description3'=>$request->Description3

   ]);
   return redirect()->route('My.blog.List')->with('success','blog updated successfully');
}

public function MyBlogDelete($blog_id){
    $blog=Blog::find($blog_id)->delete();
    return redirect()->back()->with('success','Your Blog deleted Successfully.');

}
}



    

