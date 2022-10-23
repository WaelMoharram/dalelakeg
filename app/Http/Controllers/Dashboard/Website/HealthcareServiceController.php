<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\HealthcareServiceRequest;
use App\Models\HealthcareService;

class HealthcareServiceController extends Controller
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

        $services = HealthcareService::all();

        return view('dashboard.website.healthcare-services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $service=new HealthcareService();
        return view('dashboard.website.healthcare-services.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(HealthcareServiceRequest $request)
    {

        $requests = $request->all();

        $service = HealthcareService::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.healthcare-services.index'));
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

        $service = HealthcareService::findOrFail($id);

        return view('dashboard.website.healthcare-services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,HealthcareServiceRequest $request)
    {

        $requests=$request->all();

        $service = HealthcareService::findOrFail($id);
        $service->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.healthcare-services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $service= HealthcareService::findOrFail($id);
        $service->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.healthcare-services.index'));
    }

}
