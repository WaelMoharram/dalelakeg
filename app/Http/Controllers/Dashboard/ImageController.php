<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
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

        $images = Image::all();

        return view('dashboard.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $image=new Image();
        return view('dashboard.images.create',compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ImageRequest $request)
    {

        $requests = $request->all();

        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }

        $requests['user_id']= Auth::id();
        $image = Image::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.images.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $image = Image::findOrFail($id);

        return view('dashboard.images.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $image = Image::findOrFail($id);
        //$image['name']['ar'] = $imageModel->getTranslation('name', 'ar');
        return view('dashboard.images.edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ImageRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }

        $image = Image::findOrFail($id);
        $image->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.images.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $image= Image::findOrFail($id);
        $image->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.images.index'));
    }

}
