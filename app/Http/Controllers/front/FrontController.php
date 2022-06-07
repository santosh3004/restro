<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\FileManager;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use App\Models\Page;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $sliders=Slider::where([['deleted_at',null],['status',1]])->get();
        $menuitems=MenuItem::where([['deleted_at',null],['status',1]])->get();
        $menucategories=MenuCategory::where([['deleted_at',null],['status',1]])->get();
        $reviews=Review::where([['deleted_at',null],['status',1]])->get();
        $reservation=FileManager::where([['title','Reservation'],['deleted_at',null],['status',1]])->get();
        return view('front.index',compact('sliders','menuitems','menucategories','reviews','reservation'));
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

    public function about(){
        $pages=Page::where([['deleted_at',null],['status',1]])->get();
        $teams=Team::where([['deleted_at',null],['status',1]])->get();
        $aboutBG=FileManager::where([['deleted_at',null],['status',1],['title','About Us']])->get();
        return view('front.about',compact('pages','teams','aboutBG'));
    }

    public function blog(){
        $blogs=Blog::where([['deleted_at',null],['status',1]])->get();
        $blog_categories=BlogCategory::where([['deleted_at',null],['status',1]])->get();
        $blogpagebg=FileManager::where([['deleted_at',null],['status',1],['title','Blog']])->get();
        return view('front.blog',compact('blogs','blog_categories','blogpagebg'));
    }

    public function blog_detail($blogid){
        $blog=Blog::where([['deleted_at',null],['status',1],['id',$blogid]])->first();
        $blog_categories=BlogCategory::where([['deleted_at',null],['status',1]])->get();
        $comments=BlogComment::where([['deleted_at',null],['status',1],['blog_id',$blogid]])->get();
        if($blog==null){
            return redirect()->route('front.blog')->with('message','Blog not found');
        }
        return view('front.blog_details',compact('blog','blog_categories','comments'));
    }
}
