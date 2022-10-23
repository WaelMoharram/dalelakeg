<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\ItemRequest;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
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

        $items = Item::all();

        return view('dashboard.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $item=new Item();
        $categories = Category::pluck('name','id');
        return view('dashboard.items.create',compact('item','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image1')) {
            $requests['image1'] = saveImage($request->image1, 'images');
            $request->files->remove('image1');
        }
        if ($request->hasFile('image2')) {
            $requests['image2'] = saveImage($request->image2, 'images');
            $request->files->remove('image2');
        }

        if ($request->hasFile('slider_image')) {
            $requests['slider_image'] = saveImage($request->slider_image, 'images');
            $request->files->remove('sliderimage');
        }

        $requests['user_id']= Auth::id();
        $item = Item::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.items.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $item = Item::findOrFail($id);
        $categories = Category::pluck('name','id');

        return view('dashboard.items.show',compact('item','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $item = Item::findOrFail($id);
        $categories = Category::pluck('name','id');

        //$item['name']['ar'] = $itemModel->getTranslation('name', 'ar');
        return view('dashboard.items.edit',compact('item','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ItemRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image1')) {
            $requests['image1'] = saveImage($request->image1, 'images');
            $request->files->remove('image1');
        }
        if ($request->hasFile('image2')) {
            $requests['image2'] = saveImage($request->image2, 'images');
            $request->files->remove('image2');
        }

        if ($request->hasFile('slider_image')) {
            $requests['slider_image'] = saveImage($request->slider_image, 'images');
            $request->files->remove('sliderimage');
        }

        $item = Item::findOrFail($id);
        $item->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.items.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $item= Item::findOrFail($id);
        $item->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.items.index'));
    }

}
