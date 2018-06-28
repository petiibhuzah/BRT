<?php

namespace App\Http\Controllers;
use Session;
use App\Source_Destination;
use Illuminate\Http\Request;

class SourceDestinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.source_destinations.index')->with('source_destinations',Source_Destination::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.source_destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $source_destination = new Source_Destination;
        $this->validate($request,[
            'source_destination_id'=>'required',
            'source_destination_name'=>'required',
            'image'=>'required|image',
            'price'=>'required',
            'description' => 'required'
        ]);

//       dd($request->all());
        $image = $request->image;
        $image_new_name = time().$image->getClientOriginalName();
        $image->move('uploads/routes/',$image_new_name);


        $source_destination->source_destination_id = $request->source_destination_id;
        $source_destination->source_destination_name = $request->source_destination_name;
        $source_destination->image ='uploads/routes/'.$image_new_name;
        $source_destination->price = $request->price;
        $source_destination->description = $request->description;
        $source_destination->save();

        Session::flush('success','Source-Destination  created successfully.');
        return redirect()->route('source_destination');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source_destination = Source_Destination::find($id);
        return view('admin.source_destinations.edit')->with('source_destination',$source_destination);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $source_destination = Source_Destination::find($id);
       $this->validate($request,[
           'source_destination_id'=>'required',
           'source_destination_name'=>'required',
           'price'=>'required',
           'description' => 'required'
       ]);
       if ($request->hasFile('image')){
           $image = $request->image;
           $image_new_name = time().$image->getClientOriginalName();
           $image->move('uploads/routes/',$image_new_name);
           $source_destination->image ='uploads/routes/'.$image_new_name;
           $source_destination->save();
       }

        $source_destination->source_destination_id = $request->source_destination_id;
        $source_destination->source_destination_name = $request->source_destination_name;
        $source_destination->price = $request->price;
        $source_destination->description = $request->description;
        $source_destination->save();
        Session::flush('success','Source-Destination  updated successfully.');
        return redirect()->route('source_destination');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $source_destination = Source_Destination::find($id);
//        dd($source_destination);
        if (file_exists($source_destination->image))
        {
            unlink($source_destination->image);
        }
        $source_destination->delete();
        Session::flush('success','Source-Destination  deleted successfully.');
        return redirect()->back();
    }
}
