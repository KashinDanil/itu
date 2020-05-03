<?php

namespace App\Http\Controllers;

use App\Priority;
use App\User;
use App\Action;
use Illuminate\Http\Request;
use Illuminate\View\View;


class MainPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $user = User::current();

        $projects = $user->projects()->wherePivot('is_favorite', true);

        $projects = $user->favoriteProjects()->withCount(['tasks', 'members'])->get(); // $project->tasks_count

        $priorities = Priority::whereIn('slug', ['high', 'immediate', 'normal', 'low'])->get(['id'])->map(function ($priority) {
            return $priority['id'];
        })->toArray();

        $tasks = $user->tasks()
            ->whereIn('priority_id', $priorities)
            ->with(['project', 'tags'])
            ->withCount('comments')
            ->get(); // $task->comments_count

        $latest_activity = Action::latest_activity();

        return view('pages.main', [
            'projects' => $projects,
            'tasks' => $tasks,
            'latest_activities' => $latest_activity,
        ]);
    }
}
