<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\MainInfoRequest;
use App\Http\Requests\Website\AboutUsRequest;
use App\Http\Requests\Website\WorkingTimeRequest;
use App\Models\AboutUs;
use App\Models\MainInfo;
use App\Models\WorkingTime;

class MainInfoController extends Controller
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
    public function store(WorkingTimeRequest $request)
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

        $mainInfo = MainInfo::first();

        return view('dashboard.website.main-info.edit',compact('mainInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,MainInfoRequest $request)
    {

        $requests = $request->all();
        $mainInfo = MainInfo::first();

        $mainInfo->fill($requests)->save();
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
