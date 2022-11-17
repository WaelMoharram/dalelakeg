<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\FAQRequest;
use App\Models\Blog;
use App\Models\FAQs;
use Illuminate\Support\Facades\Auth;

class FAQsController extends Controller
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

        $faqs = FAQs::all();

        return view('dashboard.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $faq=new FAQs();
        return view('dashboard.faqs.create',compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(FAQRequest $request)
    {


        FAQs::create($request->all());

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.faqs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $faq = FAQs::findOrFail($id);

        return view('dashboard.faqs.show',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $faq = FAQs::findOrFail($id);

        return view('dashboard.faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, FAQRequest $request)
    {

        $faq = FAQs::findOrFail($id);
        $faq->fill($request->all())->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.faqs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $faq= FAQs::findOrFail($id);
        $faq->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.faqs.index'));
    }

}
