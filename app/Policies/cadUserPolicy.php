<?php

namespace App\Policies;
use App\Models\cadUser;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class cadUserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function view(cadUser $cadUser)
    {
        return $cadUser->admin ?
            Response::allow() :
            Response::deny('Você não administrador do sistema.');
    }
    public function superAdmin (cadUser $cadUser) {
        return $cadUser->admin ?
            Response::allow() :
            Response::deny('Você não é administrador.');

    }
       

}
