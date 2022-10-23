<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\EventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
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

        $events = Event::all();

        return view('dashboard.website.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $event=new Event();
        return view('dashboard.website.events.create',compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(EventRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $requests['user_id']= Auth::id();
        $event = Event::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.events.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $event = Event::findOrFail($id);

        return view('dashboard.website.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $event = Event::findOrFail($id);

        return view('dashboard.website.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, EventRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $event = Event::findOrFail($id);
        $event->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.events.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $event= Event::findOrFail($id);
        $event->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.events.index'));
    }

}
