<?php

namespace App\Http\Controllers;
use App\newlinks;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = newlinks::all();

        return view('backend.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'cid' => 'required',
            'moviename' => 'required',
            'link' => 'required',
            
            'name' => 'required',

        ]);

        $newlinks = new Newlinks([
            'cid' => $request ->get('cid'),
            'moviename' => $request ->get('moviename'),
            'link' => $request ->get('link'),
            'imagename' => $request ->get('imagename'),
            'name' => $request ->get('name'),

        ]);
        $newlinks->save();
        return redirect('/backend')->with('success','contact save');
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
        
        $contact = newlinks::find($id);
        return view('backend.edit', compact('contact'));        
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
        
        $request->validate([
            'cid'=>'required',
            'moviename'=>'required',
            'link'=>'required',
            'imagename'=>'required',
            'name'=>'required'
        ]);

        $newlinks =newlinks::find($id);
        $newlinks->cid = $request->get('cid');
        $newlinks->moviename = $request->get('moviename');
        $newlinks->imagename = $request->get('imagename');
        $newlinks->namew = $request->get('name');
       
        $newlinks->save();

        return redirect('/backend')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
