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
        $formData=$request->validated();

        Project::create([
            'title'=>$formData['title'],
            'description'=>$formData['description'],
            'start_date'=>$formData['start_date'],
            'end_date'=>$formData['end_date'],
            'chief'=>$formData['chief'],
            'members'=>$formData['members'],
            'type_id'=>$formData['type_id']
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
            'type_id'=>$data['type_id']
        ]);

        return redirect()->route('admin.projects.index',compact('project'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
