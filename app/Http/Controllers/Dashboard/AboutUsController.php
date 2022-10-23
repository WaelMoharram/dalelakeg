<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;

class AboutUsController extends Controller
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
       abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if (AboutUs::count() == 0){
            AboutUs::create([
                'title'=>['ar'=>'about us','en'=>'about us',],
                'content'=>['ar'=>'about us','en'=>'about us',],
                'image1'=>'assets/dashboard/resources/app-assets/images/4.jpeg',
                'image2'=>'assets/dashboard/resources/app-assets/images/4.jpeg',
                'image3'=>'assets/dashboard/resources/app-assets/images/4.jpeg',
                'image4'=>'assets/dashboard/resources/app-assets/images/4.jpeg',
                'section_1_icon'=>'fa-user',
                'section_1_number'=>1,
                'section_1_title'=>['ar'=>'title1','en'=>'title1'],
                'section_2_icon'=>'fa-user',
                'section_2_number'=>1,
                'section_2_title'=>['ar'=>'title1','en'=>'title1'],
                'section_3_icon'=>'fa-user',
                'section_3_number'=>1,
                'section_3_title'=>['ar'=>'title1','en'=>'title1'],
                'section_4_icon'=>'fa-user',
                'section_4_number'=>1,
                'section_4_title'=>['ar'=>'title1','en'=>'title1'],
            ]);
        }
        $aboutUs = AboutUs::first();
        return view('dashboard.about-us.edit',compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, AboutUsRequest $request)
    {
        $requests = $request->all();
        if ($request->hasFile('image1')) {
            $requests['image1'] = saveImage($request->image1);
            $request->files->remove('image1');
        }

        if ($request->hasFile('image2')) {
            $requests['image2'] = saveImage($request->image2);
            $request->files->remove('image2');
        }

        if ($request->hasFile('image3')) {
            $requests['image3'] = saveImage($request->image3);
            $request->files->remove('image3');
        }

        if ($request->hasFile('image4')) {
            $requests['image4'] = saveImage($request->image4);
            $request->files->remove('image4');
        }
        $aboutUs = AboutUs::first();
        $aboutUs->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        abort(404);
    }

}
