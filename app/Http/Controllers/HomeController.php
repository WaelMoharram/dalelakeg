<?php
namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;

use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\AboutUs;
use App\Models\Contact;

use App\Models\Slider;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\AuthCommand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();

        $blogs = Blog::where('lang',app()->getLocale())->where('type','post')->orderBy('id', 'desc')->take(3)->get();

        return view('website.home',compact('sliders','blogs'));
    }

    public function contactUs(Request $request){
        $contactsUs = ContactUs::all();
        $contactUs = ContactUs::find($request->id);
        if(!$contactUs){
            $contactUs = ContactUs::first();
        }
        return view('website.contact-us',compact('contactsUs','contactUs'));
    }
    public function contactForm(Request $request){
        Contact::create($request->all());

        return redirect()->back();
    }

    public function AboutUs(Request $request){
        $aboutUs = AboutUs::first();
        return view('website.about-us',compact('aboutUs'));
    }


}
