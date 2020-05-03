<?php

namespace App\Http\Controllers;

use App\Priority;
use App\Project;
use App\Task;
use App\User;
use App\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = User::current()->projects;
        return view('pages.project-list', [
            'projects' => $projects, 
        ]);
    }

    public function show($slug)
    {
        $project = User::current()->projects()->where('slug', $slug)->firstOrFail();
        $latest_activity = Action::latest_activity();
        return view('pages.project', [
            'project' => $project,
            'latest_activities' => $latest_activity,
        ]);
    }

    public function store()
    {
        $project = new Project();
        $project->name = "Test proj";
        $project->slug = Str::slug($project->name);
        $project->save();

        $task = new Task();
        $task->name = "Create something";
        $task->description = "It is going to be cool";
        $task->assignee()->associate(User::current());
        $task->priority()->associate(Priority::find(1));

        $project->tasks()->save($task);
    }
}
