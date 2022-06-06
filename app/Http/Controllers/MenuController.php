<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=new Menu;
        $menus = $menus->where('deleted_at',null)->get();

        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
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
            'url' => 'required',
            'order'=>'required',

        ]);
        $menu=new Menu;
        $menu->title=$request->title;
        $menu->link=$request->url;
        $menu->order_no=$request->order;
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($menu)
    {
        $menu=Menu::find($menu);
        return view('admin.menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$menu)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'url' => 'required',
        //     'order'=>'required',

        // ]);
        $menu=Menu::find($menu);
        $menu->title=$request->title;
        $menu->link=$request->url;
        $menu->order_no=$request->order;
        $menu->status=$request->status;
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($menu)
    {
        $menu=Menu::withTrashed()->find($menu);
        if($menu->trashed()){
            $menu->forceDelete();
        }else{
            $menu->delete();
        }

        return redirect()->route('menu.index')->with('Message','Menu Deleted Successfully');
    }

    public function binindex()
    {
        $menus=new Menu;
        $menus = $menus->onlyTrashed()->get();

        return view('admin.menu.bin',compact('menus'));
    }
    public function restore($menu)
    {
        $menu=Menu::withTrashed()->find($menu);
        $menu->restore();
        return redirect()->route('menu.index')->with('Message','Menu Restored Successfully');
    }
}
