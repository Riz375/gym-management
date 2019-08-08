<?php

namespace App\Http\Controllers;
use App\Project;
use App\Task;
use App\events\ProjectCreated;
use Illuminate\Http\Request;
use App\Http\Requests\StoreNewProjectRequest;

class projectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function show(Project $project)
    {
        abort_if($project->owner_id !== auth()->id(),403);

        return view('projects.show', compact('project'));
    }
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }
    
    public function index()
    {
        return view('projects.index', [
            'projects' => auth()->user()->projects
        ]);
    }
    public function create()
    {
        return view('projects.create');
    }
    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));
        $project->save();
        return redirect('/projects');

    }
    public function destroy(Project $project, Task $task)
    {
       
        $project->tasks()->delete();
        $project->delete();
        
        return redirect('/projects');
    }
    public function store(StoreNewProjectRequest $request)
    {
        $data = $request->validated();

        $project = Project::create(array_merge($data, [
            'owner_id' => \Auth::user()->id
        ]));
       event(new ProjectCreated($project));

        return redirect('/projects');
    }
}
