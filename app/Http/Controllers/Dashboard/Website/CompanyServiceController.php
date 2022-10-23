<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\CompanyServiceRequest;
use App\Models\CompanyService;

class CompanyServiceController extends Controller
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

        $services = CompanyService::all();

        return view('dashboard.website.company-services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $service=new CompanyService();
        return view('dashboard.website.company-services.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CompanyServiceRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('logo');
        }
        $service = CompanyService::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.company-services.index'));
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

        $service = CompanyService::findOrFail($id);

        return view('dashboard.website.company-services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,CompanyServiceRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $service = CompanyService::findOrFail($id);
        $service->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.company-services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $service= CompanyService::findOrFail($id);
        $service->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.company-services.index'));
    }

}
