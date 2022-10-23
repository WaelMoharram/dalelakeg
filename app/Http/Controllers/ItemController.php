<?php
namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;

use App\Models\Slider;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\AuthCommand;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request){
        $items = Item::where('category_id',$request->category_id)->paginate(9);

        return view('website.items.index',compact('items'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
         $item= Item::findOrFail($id);
        $items = Item::where('category_id',$item->category_id)->get();

        return view('website.items.show',compact('item','items'));
    }


}
