<?php

namespace App\Policies;

use App\Models\User;
use App\Models\logicAnswer;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogicAnswerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\logicAnswer  $logicAnswer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, logicAnswer $logicAnswer)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\logicAnswer  $logicAnswer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, logicAnswer $logicAnswer)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\logicAnswer  $logicAnswer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, logicAnswer $logicAnswer)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\logicAnswer  $logicAnswer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, logicAnswer $logicAnswer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\logicAnswer  $logicAnswer
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, logicAnswer $logicAnswer)
    {
        //
    }
}
