<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\newlinks;
use App\randoms;
use App\admins;

use Illuminate\Http\Request;

class AllController extends Controller
{ 
    public function action(){
        $link=DB::table('newlinks')->where('newlinks.cid','=','3')->paginate(5);
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
        return view('forntend.action',compact('link','random'));
    }
    public function ghost(){
        $link=DB::table('newlinks')->where('newlinks.cid','=','4')
        ->paginate(5);
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
          return view('forntend.ghost',compact('link','random'));
    }
    public function drama(){
        $link=DB::table('newlinks')->where('newlinks.cid','=','2')
        ->paginate(5);
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
          return view('forntend.drama',compact('link','random'));
    }
    public function funny(){
        $link=DB::table('newlinks')->where('newlinks.cid','=','1')
        ->paginate(5);
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
          return view('forntend.funny',compact('link','random'));
    }
   
    public function nextshow($id){
        $id=DB::table('newlinks')->find($id);
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
        return view('forntend.aa',compact('id','random'));
    }



   public function search(Request $request){
  
      $search = $request->get('search');
      $catname=randoms::select('categoryname');
      $link=newlinks::where('moviename','like','%'.$search.'%')->get();
      $name=newlinks::where('name','like','%'.$search.'%')->get();
      $random= DB::table('randoms')->select('id', 'categoryname')->get();
      return view('forntend.search',compact('catname','link','name','search','random'));
    
    
   }
  public function showall(){
  
        $link=DB::table('newlinks')->where('newlinks.cid','=','3')
        ->get();
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
          return view('forntend.all',compact('link','random'));
    
  }
  public function category(){
  
   
               

  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $link=DB::table('newlinks')->orderBy(DB::raw('RAND()'))->paginate(12);
        $random= DB::table('randoms')->select('id', 'categoryname')->get();
        return view('forntend.mainpage',compact('link','random'));
    
      
    
    }
   public function table(){
       $link=newlinks::all();
       return view('forntend.table',compact('link'));
   }

   public function editform(){
       $link=newlinks::all();
       $random= DB::table('randoms')->select('id', 'categoryname')->get();
       return view('forntend.editform',compact('link','random'));
   }
   public function about()
    {
        return view('forntend.about');
    }
    public function login(Request $request)
    {

        $link = admins::all();
        $user = $request->get('username');
        $pass = $request->get('password');
        return view('forntend.loginuser',compact('pass','user','link'));
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
      
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

    }
}
