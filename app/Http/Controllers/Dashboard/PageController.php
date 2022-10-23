<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
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

        $pages = Blog::where('type','page')->get();

        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $page=new Blog();
        return view('dashboard.pages.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BlogRequest $request)
    {

        $requests = $request->all();
        $requests['type']='page';
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $requests['user_id']= Auth::id();
        $page = Blog::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $page = Blog::findOrFail($id);

        return view('dashboard.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $page = Blog::findOrFail($id);

        return view('dashboard.pages.edit',compact('page'));
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
        $page = Blog::findOrFail($id);
        $page->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $page= Blog::findOrFail($id);
        $page->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.pages.index'));
    }

}
