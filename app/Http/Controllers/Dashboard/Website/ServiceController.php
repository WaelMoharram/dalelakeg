<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\ServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
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

        $services = Service::where('type','service')->orderBy('order_number')->get();

        return view('dashboard.website.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $service=new Service();
        return view('dashboard.website.services.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ServiceRequest $request)
    {

        $requests = $request->all();
        $service = Service::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.services.index'));
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

        $service = Service::findOrFail($id);

        return view('dashboard.website.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,ServiceRequest $request)
    {

        $requests=$request->all();
        $service = Service::findOrFail($id);
        $service->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $service= Service::findOrFail($id);
        $service->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.services.index'));
    }

}
