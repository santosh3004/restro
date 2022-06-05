<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = new BlogCategory;
        $category = $category->where('deleted_at', null)->get();
        return view('admin.blogs_categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);
        $category = new BlogCategory;
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->order_no=$request->order_no;
        $category->save();
        return redirect()->route('blogcategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($blogCategory)
    {
        $category = new BlogCategory;
        $category = $category->where('id',$blogCategory)->first();
        return view('admin.blogs_categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$blogCategory)
    {
        $category = new BlogCategory;
        $category = $category->where('id',$blogCategory)->first();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $category->update();

        return redirect()->route('blogcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogCategory)
    {
        $category=new BlogCategory;
        $category=$category->where('id',$blogCategory)->first();
        if ($category->deleted_at==null) {
            $category->delete();
        } else {
            $category->forceDelete();
        }
        return redirect()->route('blogcategory.index');
    }

    public function binindex(){
        $category = new BlogCategory;
        $category = $category->onlyTrashed()->get();
        return view('admin.blogs_categories.bin',compact('category'));
    }

    public function restore($blogCategory){
        $category=new BlogCategory;
        $category=$category->withTrashed()->where('id',$blogCategory)->first();
        $category->restore();
        return redirect()->route('blogcategory.index');
    }

}
