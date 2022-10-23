<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\PartnerRequest;
use App\Models\Partner;

class PartnerController extends Controller
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

        $partners = Partner::all();

        return view('dashboard.website.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $partner=new Partner();
        return view('dashboard.website.partners.create',compact('partner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PartnerRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('logo');
        }
        $partner = Partner::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.partners.index'));
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

        $partner = Partner::findOrFail($id);

        return view('dashboard.website.partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,PartnerRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $partner = Partner::findOrFail($id);
        $partner->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.partners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $partner= Partner::findOrFail($id);
        $partner->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.partners.index'));
    }

}
