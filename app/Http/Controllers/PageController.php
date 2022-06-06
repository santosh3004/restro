<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::where('deleted_at', null)->get();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->content = $request->content;
        $page->image= $request->image;
        $page->order_no= $request->order_no;
        $page->save();
        return redirect()->route('page.index')->with('message','Page created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($pageId)
    {
        $page = Page::find($pageId);
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $pageId)
    {
        $page = Page::find($pageId);
        $page->title = $request->title;
        $page->slug= $request->slug;
        $page->content = $request->content;
        if($request->image!=null){
            $page->image= $request->image;
        }
        $page->order_no= $request->order_no;
        $page->status= $request->status;
        $page->save();
        return redirect()->route('page.index')->with('message','Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($pageId)
    {
        $page = Page::withTrashed()->find($pageId);
        if($page->trashed()){
          $page->forceDelete();
        }else{
        $page->delete();
        }
        return redirect()->route('page.index')->with('message','Page deleted successfully');
    }

    public function binindex(){
        $pages = Page::onlyTrashed()->get();
        return view('admin.page.bin', compact('pages'));
    }

    public function restore($id){
        $page = Page::withTrashed()->where('id', $id)->first();
        $page->restore();
        return redirect()->route('page.index')->with('message','Page restored successfully');
    }
}
