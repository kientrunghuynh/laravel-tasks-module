<?php

namespace App\Modules\Tasks\Models;

use App\User;
use App\Modules\Tasks\Models\Task;
use Illuminate\Support\Facades\Config;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->paginate(Config::get('parameter.total_task_per_page'));
    }
}