<?php

use App\Comment;
use App\Project;
use App\Tag;
use App\Task;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create random projects, tasks and comments
        factory(Project::class, 3)->create()->each(function ($project) {
            /** @var Project $project */
            $project->tasks()->createMany(factory(Task::class, 3)->make()->toArray());

            $project->tasks()->each(function ($task) use ($project) {
                /** @var Task $task */
                $task->comments()->createMany(factory(Comment::class, 3)->make()->toArray());
                $task->tags()->save(Tag::inRandomOrder()->limit(3)->first());
                $project->members()->save($task->assignee);
            });
        });

        // each user should have at least one favorite item
        $projectUsers = DB::select('select * from project_user group by user_id');
        foreach ($projectUsers as $record) {
            DB::update('update project_user set is_favorite = 1 where id = ?', [$record->id]);
        }
    }
}
