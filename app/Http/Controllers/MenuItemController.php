<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuItems = MenuItem::where('deleted_at', null)->get();
        return view('admin.menuitem.index', compact('menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menucategories=MenuCategory::all();
        return view('admin.menuitem.create', compact('menucategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menuitem=new MenuItem();
        $menuitem->name=$request->name;
        $menuitem->desc=$request->desc;
        $menuitem->price=$request->price;
        $menuitem->image=$request->image;
        $menuitem->order_no=$request->order_no;
        $menuitem->menu_category_id=$request->menu_category_id;
        $menuitem->save();
        return redirect()->route('menuitem.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(MenuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit($menuitemId)
    {
        $menuitem=MenuItem::find($menuitemId);
        $menucategories=MenuCategory::all();
        return view('admin.menuitem.edit',compact('menuitem','menucategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$menuItemId)
    {
        $menuitem=MenuItem::find($menuItemId);
        $menuitem->name=$request->name;
        $menuitem->desc=$request->desc;
        $menuitem->price=$request->price;
        if($request->image!=null){
            $menuitem->image=$request->image;
        }
        $menuitem->order_no=$request->order_no;
        $menuitem->menu_category_id=$request->menu_category_id;
        $menuitem->status=$request->status;
        $menuitem->save();
        return redirect()->route('menuitem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($menuItemId)
    {
        $menuitem=MenuItem::find($menuItemId);
        if($menuitem->trashed()){
            $menuitem->forceDelete();
        }else{
        $menuitem->delete();
        }
        return redirect()->route('menuitem.index');
    }

    public function restore($menuItemId)
    {
        $menuitem=MenuItem::withTrashed()->find($menuItemId);
        $menuitem->restore();
        return redirect()->route('menuitem.index');
    }

    public function binindex(){
        $menuitems=MenuItem::onlyTrashed()->get();
        return view('admin.menuitem.bin',compact('menuitems'));
    }
}
