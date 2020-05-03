<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property mixed projects
 * @property mixed favoriteProjects
 * @method static inRandomOrder()
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Domain Driven Development
    public function importantTasks()
    {
        $priorities = Priority::whereIn('slug', ['high', 'immediate'])->get(['id'])->map(function ($priority) {
            return $priority['id'];
        })->toArray();
        return $this->hasMany(Task::class)->whereIn('priority_id', $priorities);
    }

    /**
     * @return self
     */
    public static function current()
    {
        return self::find(1);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('is_favorite')->withTimestamps();
    }

    public function favoriteProjects()
    {
        return $this->belongsToMany(Project::class)->wherePivot('is_favorite', true);
    }

    public function actions()
    {
        return $this->hasMany(Action::class);
    }
}
