<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=new Blog;
        $blogs=$blogs->get();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_category = new BlogCategory;
        $blog_category = $blog_category->get();

        return view('admin.blog.create',compact('blog_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $blog=new Blog;
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->image=$request->img;
        $blog->slug=$request->slug;
        $blog->blog_category_id=$request->category_id;
        $blog->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog)
    {
        $blog=Blog::find($blog)->first();
        $blog_category = new BlogCategory;
        $blog_category = $blog_category->get();
        return view('admin.blog.edit',compact('blog','blog_category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog)
    {
        $blog=Blog::find($blog);
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->img=$request->img;
        $blog->slug=$request->slug;
        $blog->update();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
        $blog=Blog::find($blog);
        if ($blog->trashed()) {
            $blog->forceDelete();

        }else{
        $blog->delete();
        return redirect()->route('blog.index');
    }
    return redirect()->route('blog.index');
    }
}
