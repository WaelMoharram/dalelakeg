<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
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

        $members = Member::where('service_id',$request->service_id)->get();;

        return view('dashboard.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $member=new Member();
        return view('dashboard.members.create',compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(MemberRequest $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }


        $member = Member::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.members.index',['service_id',$request->service_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $member = Member::findOrFail($id);

        return view('dashboard.members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $member = Member::findOrFail($id);
        //$member['name']['ar'] = $memberModel->getTranslation('name', 'ar');
        return view('dashboard.members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, MemberRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }


        $member = Member::findOrFail($id);
        $member->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.members.index',['service_id',$request->service_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $member= Member::findOrFail($id);
        $member->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.members.index'));
    }

}
