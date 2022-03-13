<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SurveyPolicy
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
        return $user->role_id == Role::IS_ADMIN;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Survey $survey)
    {
        //
        return $user->role_id == Role::IS_ADMIN || $user->id == $survey->user_id;
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
        return $user->role_id == Role::IS_ADMIN || $user->role_id == Role::IS_RESEARCHER;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Survey $survey)
    {
        //
        return $user->role_id == Role::IS_ADMIN || $user->id == $survey->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Survey $survey)
    {
        //
        return $user->role_id == Role::IS_ADMIN || $user->id == $survey->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Survey $survey)
    {
        //
        return $user->role_id == Role::IS_ADMIN;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Survey $survey)
    {
        //
        return $user->role_id == Role::IS_ADMIN;
    }
}
