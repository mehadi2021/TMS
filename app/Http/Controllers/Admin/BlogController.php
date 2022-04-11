<?php

namespace App\Http\Controllers\Admin;
use App\Models\Blog;
use App\Models\User;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    //Admin blog add
    public function Addblog(){
        $user=User::all();
        $location=Location::all();
        
        return view('admin.layouts.blog.AddBlog',compact('user','location'));
    }
    public function storeBlog(Request $request){
        $request->validate([
            'Date'=>'after_or_equal:today',
            'Description'=>'required'|'string',
            'BlogName'=>'required'|'string',
          
           
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
            $file->storeAs('/uploads/Blogs/',$SecondBlogImagefile);
        }
        $ThirdBlogImagefile='';
        if($request->hasFile('ThirdBlogImage')){
            $file=$request->file('ThirdBlogImage');
            $ThirdBlogImagefile=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/Blogs/',$ThirdBlogImagefile);
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
        return redirect()->back()->with('msg','Blog created Successfully');
    }
    public function BlogList(){
        $key=null;
        if(request()->search){
            $key=request()->search;
            $Blogs=Blog::with('user','locatin')
                        ->whereLike(['BlogName','location.Location_name','user.name'],$key)->get();
            return view('admin.layouts.blog.BlogList',compact('Blogs','key'));
            
        }
        
    
        $Blogs=Blog::with('user','location')->get();
        return view('admin.layouts.blog.BlogList',compact('Blogs','key'));

    }
    public function Blogdetails($blog_id){
        $blog=Blog::find($blog_id);
        return view('admin.layouts.blog.Blogdetails',compact('blog'));

    }
    public function BlogDelete($blog_id){
        $blog=Blog::find($blog_id)->delete();
        return redirect()->back()->with('success','Blog deleted Successfully.');

    }
    public function BlogEdit($blog_id){
        $blog=Blog::find($blog_id);
        return view('admin.layouts.blog.BlogEdit',compact('blog'));

    }
    public function BlogUpdate(Request $request,$blog_id){

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
       return redirect()->route('admin.blog.blogList')->with('success','blog updated successfully');
    }
    public function approveBlog($blog_id){
        $Blog=Blog::find($blog_id);
        
        if($Blog)
        {
            $Blog->update([
                'status'=>'approved'
            ]);
            return redirect()->back()->with('success','Blog has been approved');
        }
       
        
        return redirect()->back();
    
    }
    public function declineBlog($blog_id){
        $Blog=Blog::find($blog_id);
        
        if($Blog)
        {
            $Blog->update([
                'status'=>'decline'
                
            ]);
            
            // $TourPlans=AddTourPlan::find($tourplan_id)->delete();
            return redirect()->back()->with('error','Tour plan has been declined');
        }
        return redirect()->back();
    
    }

    //report blog
    public function blogReportshow(){
        $blogs=Blog::all();
        return view('admin.layouts.blog.Report.blog_report',compact('blogs'));
    }
    public function blogReport(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);

        $blogs=Blog::whereBetween('created_at',[$request->from,$request->to])->get();


        return view('admin.layouts.blog.Report.blog_report',compact('blogs'));

    }

}
