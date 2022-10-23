<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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

        $categories = Category::all();

        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $category=new Category();
        return view('dashboard.categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CategoryRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }

        if ($request->hasFile('slider_image')) {
            $requests['slider_image'] = saveImage($request->slider_image, 'images');
            $request->files->remove('sliderimage');
        }

        $requests['user_id']= Auth::id();
        $category = Category::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $category = Category::findOrFail($id);

        return view('dashboard.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $category = Category::findOrFail($id);
        //$category['name']['ar'] = $categoryModel->getTranslation('name', 'ar');
        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CategoryRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        if ($request->hasFile('slider_image')) {
            $requests['slider_image'] = saveImage($request->slider_image, 'images');
            $request->files->remove('sliderimage');
        }

        $category = Category::findOrFail($id);
        $category->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $category= Category::findOrFail($id);
        $category->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.categories.index'));
    }

}
