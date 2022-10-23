<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\AboutUsRequest;
use App\Http\Requests\Website\ContactUsRequest;
use App\Http\Requests\Website\WorkingTimeRequest;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\WorkingTime;

class ContactUsController extends Controller
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
    public function edit()
    {

        if (ContactUS::count() == 0){
            ContactUs::create([
                'title_ar'=>'about us',
                'title_en'=>'about us',
                'content_ar'=>'about us',
                'content_en'=>'about us',
                'map_image'=>'about us',
                'section_image'=>'about us',
            ]);
        }
        $contactUs = ContactUs::first();
        if ($contactUs)

        return view('dashboard.website.contact-us.edit',compact('contactUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ContactUsRequest $request)
    {

        $requests = $request->all();

        $contactUs = ContactUs::first();
        $contactUs->fill($requests)->save();
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
