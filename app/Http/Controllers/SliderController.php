<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = new Slider;
        $sliders = $slider->where('deleted_at',null)->get();

        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->subtitle= $request->subtitle;
        $slider->btn_text= $request->btn_text;
        $slider->btn_link= $request->btn_link;
        $slider->order_no= $request->order_no;
        $slider->image = $request->image;
        $slider->save();
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($sliderid)
    {
        $slider = Slider::find($sliderid);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$sliderid)
    {
        $slider = Slider::find($sliderid);
        $slider->title = $request->title;
        $slider->subtitle= $request->subtitle;
        $slider->btn_text= $request->btn_text;
        $slider->btn_link= $request->btn_link;
        $slider->order_no= $request->order_no;
        $slider->image = $request->image;
        $slider->status = $request->status;
        $slider->save();
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($sliderId)
    {
        $slider = Slider::find($sliderId);
        if($slider->trashed()){
            $slider->forceDelete();
        }else{
        $slider->delete();
        }
        return redirect()->route('slider.index');
    }

    public function binindex(){
        $slider = new Slider;
        $sliders = $slider->onlyTrashed()->get();

        return view('admin.slider.bin',compact('sliders'));
    }

    public function restore($id){
        $slider = Slider::withTrashed()->find($id);
        $slider->restore();
        return redirect()->route('slider.index');
    }
}
