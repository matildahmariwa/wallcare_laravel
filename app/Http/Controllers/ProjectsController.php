<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Photo;
use DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_projects=DB::table('projects')
        ->get();
            return View::make('pages.test', array('val'=>$all_projects));               
           } 
           public function design()
           {
               $design_project=DB::table('projects')
               ->where('category','=','design & build')
               ->get();
                   return View::make('pages.test', array('val'=>$design_project));               
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  

        $p=Project::find($id);

        $previous = Project::where('id', '<', $p->id)->orderBy('id', 'desc')->first();

        $next = Project::where('id', '>', $p->id)->first();

        

        $photos = DB::table('photos')->get();

        // dd($previous);
        return view('pages.project', compact('p','photos','previous','next'));
       
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
        //
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
