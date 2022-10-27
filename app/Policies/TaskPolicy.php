<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    use HandlesAuthorization;

    
    public function viewAny (User $user, Task $task) {
        return $user->id === $task->user_id ?
            Response::allow() :
            Response::deny("Você só visualizar suas tarefas");

    }

    public function edit (User $user, Task $task) {
        return $user->id === $task->user_id ?
            Response::allow() :
            Response::deny("Você só pode editar suas tarefas");
    }

    public function forceDelete (User $user, Task $task) {
        return $user->id === $task->user_id ?
            Response::allow() :
            Response::deny("Você só pode remover suas tarefas.");
    }
}
