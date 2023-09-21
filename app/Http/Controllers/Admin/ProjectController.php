<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects= Project::all();
        //  dd($projects);
        return view ('admin.index' , compact('projects'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $formaData=$request->validated();

        Project::create([
            'title'=>$formaData['title'],
            'description'=>$formaData['description'],
            'start_date'=>$formaData['start_date'],
            'end_date'=>$formaData['end_date'],
            'chief'=>$formaData['chief'],
            'members'=>$formaData['members'],
        ]);

        return redirect()->route('admin.projects.index');
    }






    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data=$request->validated();

        $project->update([
            'title'=>$data['title'],
            'description'=>$data['description'],
            'start_date'=>$data['start_date'],
            'end_date'=>$data['title'],
            'chief'=>$data['chief'],
            'members'=>$data['members'],
        ]);

        return redirect()->route('admin.index',compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
