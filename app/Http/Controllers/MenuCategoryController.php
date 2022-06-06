<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menucategories = MenuCategory::where('deleted_at', null)->get();
        return view('admin.menu_category.index', compact('menucategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menucategory=new MenuCategory();
        $menucategory->title=$request->title;
        $menucategory->slug=$request->slug;
        $menucategory->image=$request->image;
        $menucategory->order_no=$request->order_no;
        $menucategory->save();
        return redirect()->route('menucategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function show($menuCategoryId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($menuCategoryId)
    {
        $menucategory=MenuCategory::find($menuCategoryId);
        return view('admin.menu_category.edit', compact('menucategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$menuCategoryId)
    {
        $menucategory=MenuCategory::find($menuCategoryId);
        $menucategory->title=$request->title;
        $menucategory->slug=$request->slug;
        if($request->image!=null){
            $menucategory->image=$request->image;
        }
        $menucategory->order_no=$request->order_no;
        $menucategory->status=$request->status;
        $menucategory->save();
        return redirect()->route('menucategory.index')->with('message','Menu Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($menuCategoryId)
    {
        $menucategory=MenuCategory::withTrashed()->find($menuCategoryId);
        if($menucategory->trashed()){
            $menucategory->forceDelete();
        }else{
        $menucategory->delete();
        }
        return redirect()->route('menucategory.index')->with('message','Menu Category Deleted Successfully');
    }

    public function binindex(){
        $menucategories = MenuCategory::onlyTrashed()->get();
        return view('admin.menu_category.bin', compact('menucategories'));
    }

    public function restore($menuCategoryId){
        $menucategory=MenuCategory::withTrashed()->find($menuCategoryId);
        $menucategory->restore();
        return redirect()->route('menucategory.index')->with('message','Menu Category Restored Successfully');
    }
}
