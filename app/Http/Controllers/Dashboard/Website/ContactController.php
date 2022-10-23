<?php

namespace App\Http\Controllers\Dashboard\Website;

use App\Http\Controllers\Controller;

use App\Http\Requests\Website\NewsRequest;
use App\Models\News;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
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

        $contacts = Contact::all();
        return view('dashboard.website.contacts.index', compact('contacts'));
    }


    public function destroy($id)
    {

        $contact= Contact::findOrFail($id);
        $contact->delete();
        toast(__('Deleted successfully'),'success');
        return back();
    }

}
