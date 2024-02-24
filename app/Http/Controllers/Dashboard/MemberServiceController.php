<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\MemberServiceRequest;
use App\Models\MemberService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberServiceController extends Controller
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

        $memberServices = MemberService::where('service_id',$request->service_id)->get();;

        return view('dashboard.member-services.index', compact('memberServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $memberService=new MemberService();
        return view('dashboard.member-services.create',compact('memberService'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $requests = $request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }


        $memberService = MemberService::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.member-services.index',['service_id'=>$request->service_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $memberService = MemberService::findOrFail($id);

        return view('dashboard.member-services.show',compact('memberService'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $memberService = MemberService::findOrFail($id);
        //$memberService['name']['ar'] = $memberServiceModel->getTranslation('name', 'ar');
        return view('dashboard.member-services.edit',compact('memberService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }


        $memberService = MemberService::findOrFail($id);
        $memberService->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.member-services.index',['service_id'=>$request->service_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $memberService= MemberService::findOrFail($id);
        $memberService->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.member-services.index'));
    }

}
