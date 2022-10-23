<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\ProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
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

        $projects = Project::all();

        return view('dashboard.website.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $project=new Project();
        return view('dashboard.website.projects.create',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProjectRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }

        $project = Project::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

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

        $project= Project::findOrFail($id);
        $project->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.projects.index'));
    }

}
