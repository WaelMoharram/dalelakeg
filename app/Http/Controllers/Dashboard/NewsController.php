<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
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

        $news = News::all();

        return view('dashboard.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $new=new News();
        return view('dashboard.news.create',compact('new'));
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
        $new = News::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $new = News::findOrFail($id);

        return view('dashboard.news.show',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $new = News::findOrFail($id);

        return view('dashboard.news.edit',compact('new'));
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
        $new = News::findOrFail($id);
        $new->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $new= News::findOrFail($id);
        $new->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.news.index'));
    }

}
