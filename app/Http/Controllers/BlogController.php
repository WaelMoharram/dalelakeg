<?php
namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;

use App\Models\Slider;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\AuthCommand;

class BlogController extends Controller
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

    public function index(){
        $blogs = Blog::where('lang',app()->getLocale())->where('type','blog')->orderBy('id', 'desc')->paginate(9);

        return view('website.blogs.index',compact('blogs'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
         $blog= Blog::findOrFail($id);
        return view('website.blogs.show',compact('blog'));
    }


}
