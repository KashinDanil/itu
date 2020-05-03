<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Project;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // /projects/{project}/tasks
    // @todo постраничка
    public function index(Project $project)
    {
        return view('pages.project-tasks', ['project' => $project]);
    }

    // /projects/{project}/tasks/{task}
    // @todo проверка доступа к текущему юзеру
    public function show(Project $project, Task $task)
    {
        return view('pages.task', ['task' => $task]);
    }
}
