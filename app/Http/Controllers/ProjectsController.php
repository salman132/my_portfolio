<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        return view('admin.projects.project')
            ->with('projects',Project::orderBy('id','desc')->paginate(5))
            ->with('categories',Category::all());
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
        $request->validate([
            'title'=> 'required',
            'category'=>'required|integer',
            'link'=> 'required|url',
            'technology'=> 'required',
            'description'=>'required',
            'file'=>'required|image'
        ]);

        $project = new Project();
        $project->user_id = Auth::id();
        $project->title = $request->title;
        $project->category_id = $request->category;
        $project->link = $request->link;
        $project->technology = $request->technology;
        $project->description = $request->description;

        if($request->hasFile('file')){
            $file = $request->file;
            $file_new_name = time().$file->getClientOriginalName();
            $file->move('uploads/project/',$file_new_name);

            $project->image = 'uploads/project/'.$file_new_name;

        }

        $project->save();
        Session::flash('success','You have added a Project');
        return redirect()->back();
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
        $project = Project::find($id);

        return view('admin.projects.edit')
            ->with('project',$project)
            ->with('categories',Category::all());
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
        Project::destroy($id);
        Session::flash('success','You deleted a project');
        return redirect()->back();
    }
}
