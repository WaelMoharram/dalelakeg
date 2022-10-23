<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
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

        $contactsUs = ContactUs::all();

        return view('dashboard.contact-us.index', compact('contactsUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $contactUs=new ContactUs();
        return view('dashboard.contact-us.create',compact('contactUs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ContactUsRequest $request)
    {

        $requests = $request->all();

        $contactUs = ContactUs::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.contact-us.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $contactUs = ContactUs::findOrFail($id);

        return view('dashboard.contact-us.show',compact('contactUs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $contactUs = ContactUs::findOrFail($id);

        return view('dashboard.contact-us.edit',compact('contactUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ContactUsRequest $request)
    {

        $requests=$request->all();
        $contactUs = ContactUs::findOrFail($id);
        $contactUs->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.contact-us.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        $contactUs= ContactUs::findOrFail($id);
        $contactUs->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.contact-us.index'));
    }

}
