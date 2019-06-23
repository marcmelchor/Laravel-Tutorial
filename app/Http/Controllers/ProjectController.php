<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }


    public function store(Request $request)
    {
        csrf_field();
        $attributes = $request->validate([
            'title'=> ['required', 'min:3', 'max:100'],
            'description' => ['required', 'min:3', 'max:100']
        ]);

        Project::create($attributes);

        return redirect('/project');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update([
            'title'=> $request->title,
            'description'=> $request->description
        ]);

        return redirect('/project');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/project');
    }
}
