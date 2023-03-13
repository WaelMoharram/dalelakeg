<?php
namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;

use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\AboutUs;
use App\Models\Contact;

use App\Models\FAQs;
use App\Models\Image;
use App\Models\Service;
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

        return view('website.contact-us');
    }
    public function contactForm(Request $request){
        Contact::create($request->all());

        return redirect()->back();
    }

    public function AboutUs(Request $request){
        $aboutUs = AboutUs::first();
        return view('website.about-us',compact('aboutUs'));
    }

    public function faqs(){
        $faqs = FAQs::all();
        return view('website.faqs',compact('faqs'));

    }

    public function blogs(){
        $blogs = Blog::where('type','blog')->paginate(15);
        return view('website.blogs',compact('blogs'));
    }
    public function works(){
        $works = Service::where('type','work')->paginate(15);
        return view('website.works',compact('works'));

    }
    public function blog($id){
        $blog = Blog::find($id);
        return view('website.blog',compact('blog'));

    }

    public function services(){
        $services = Service::where('type','service')->orderBy('order_number')->get();
        return view('website.services',compact('services'));
    }

    public function service($id){
        $service = Service::find($id);
        $service->views = $service->views+1;
        $service->save();
        return view('website.service',compact('service'));
    }

    public function images(){
        $images = Image::OrderByDesc('id')->paginate(9);
        return view('website.images',compact('images'));

    }


}
