<?php

namespace App\Http\Controllers;

use App\Source_Destination;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('index')->with('source_destinations',Source_Destination::paginate(3));
    }
    public function singleBook($id){
        return view('single',['source_destination'=>Source_Destination::find($id)]);
    }
}
