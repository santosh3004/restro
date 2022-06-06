<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\FileManager;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $sliders=Slider::where([['deleted_at',null],['status',1]])->get();
        $menuitems=MenuItem::where([['deleted_at',null],['status',1]])->get();
        $menucategories=MenuCategory::where([['deleted_at',null],['status',1]])->get();
        $reviews=Review::where([['deleted_at',null],['status',1]])->get();
        return view('front.index',compact('sliders','menuitems','menucategories','reviews'));
    }


    public function menu(){
        $menucategories=MenuCategory::where([['deleted_at',null],['status',1]])->get();
        $menuitems=MenuItem::where([['deleted_at',null],['status',1]])->get();
        $reservationBG=FileManager::where([['deleted_at',null],['status',1]])->where(function ($q){$q->where('title','Menu')->orWhere('title','Reservation');})->get();
        return view('front.menu',compact('menucategories','menuitems','reservationBG'));
    }

    public function reservation(){
        $reservation=FileManager::where([['title','Reservation'],['deleted_at',null],['status',1]])->get();
        return view('front.reservation',compact('reservation'));
    }

    public function reserve(Request $request){
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->Guest = $request->guestcount;
        $reservation->time = $request->time;
        $reservation->date = $request->date;
        if($request->message!=null){
            $reservation->message = $request->message;
        }

        $reservation->save();

        return redirect()->back()->with('message', 'Your reservation has been sent successfully.');
    }
    public function contact(){
        $contact=FileManager::where([['title','Contact'],['deleted_at',null],['status',1]])->get();
        return view('front.contact',compact('contact'));
    }


    public function about(){
        return view('front.about');
    }

    public function blog(){
        return view('front.blog');
    }

    public function blog_detail($blogid){
        return view('front.blog_details');
    }
}
