<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newlinks;

class Research extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newlinks = newlinks::all();

        return view('backend.index', compact('newlinks'));
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
        $request->validate([
            'cid'=>'required',
            'moviename'=>'required',
            'link'=>'required',
            'imagename'=>'required',
            'name'=>'required'
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
        $contact = Newlinks::find($id);
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

        $contact = newlinks::find($id);
        // $contact->id =  $request->get('id');
        $contact->cid = $request->get('cid');
        $contact->moviename = $request->get('moviename');
        $contact->link = $request->get('link');
        $contact->imagename = $request->get('imagename');
        $contact->name = $request->get('name');
        $contact->save();

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
        $contact = newlinks::find($id);
        $contact->delete();

        return redirect('/backend')->with('success', 'Contact deleted!');
    }
}
