<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $blogs = Blog::where('type','blog')->orderBy('order_number')->get();

        return view('dashboard.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $blog=new Blog();
        return view('dashboard.blogs.create',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BlogRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $requests['user_id']= Auth::id();
        $blog = Blog::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.blogs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $blog = Blog::findOrFail($id);

        return view('dashboard.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $blog = Blog::findOrFail($id);

        return view('dashboard.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, BlogRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $blog = Blog::findOrFail($id);
        $blog->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.blogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $blog= Blog::findOrFail($id);
        $blog->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.blogs.index'));
    }

}
