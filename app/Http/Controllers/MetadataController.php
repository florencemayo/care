<?php

namespace App\Http\Controllers;

use App\Metadata;

use Illuminate\Http\Request;

use App\Http\Requests;

class MetadataController extends Controller
{
    
    public function __construct(){
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
         metadatas = Metadata::where('user_id', $request->user()->id)->get();
         return metadatas;
        */
        return Metadata::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        //TO BE TESTED LATER
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);*/

        /*
        
        $request->user()->metadatas->create([
            name = $request->name;
        ]);

        redirect('/metadata');
        */

        $metadata = new Metadata;
        $metadata->name = $request->name;
        $metadata->save();
        return $metadata;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Metadata::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $metadata = Metadata::find($id);
        $metadata->name = $request->name;
        $metadata->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* 
            functon destroy(Request $request, Task $task)
            $this->authorize('destroy', metadata)
        */
        $metadata = Metadata::find($id);
        $metadata->delete();
    }
}
