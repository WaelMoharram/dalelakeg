<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\ProjectRequest;
use App\Models\Project;
use App\Models\ProjectDetail;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
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
    public function index(Request $request)
    {

        $details = ProjectDetail::where('project_id',$request->id)->get();

        return view('dashboard.website.project-details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $detail=new ProjectDetail();
        return view('dashboard.website.project-details.create',compact('detail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {



        $detail = ProjectDetail::create($request->all());

        toast(__('Added successfully'),'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        abort(404);
        $project = Project::findOrFail($id);

        return view('dashboard.website.projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        abort(404);
        $project = Project::findOrFail($id);

        return view('dashboard.website.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ProjectRequest $request)
    {
        abort(404);
        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $project = Project::findOrFail($id);
        $project->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $detail= ProjectDetail::findOrFail($id);
        $detail->delete();
        toast(__('Deleted successfully'),'success');
        return redirect()->back();
    }

}
