<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        return view('dashboard.projects.create');

        dd('boe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    $data = $request->validate([
        'titel' => 'required|min:3',
        'description' => 'required',
        'published' => ''


    ]);

    $publised = false;
    if(isset($data['published'])){
        $published = true;
    }

    $project = new Project();
    $project->titel = $data['titel'];
    $project->description = $data['description'];

    $project->save();

    return redirect( route('project.show', $project->id ) );
}


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
  

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index')->with('success', 'Project deleted successfully');
    }

    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects'=>$projects]);

    }


}
