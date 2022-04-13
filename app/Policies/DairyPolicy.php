<?php

namespace App\Policies;

use App\Models\Journal;
use App\Models\Dairy;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DairyPolicy
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
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Dairy $dairy, $journalId)
    {
        return $user->id===$dairy->user_id and $journalId==$dairy->journal_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->id===$dairy->user_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Dairy $dairy)
    {
        return $user->id===$dairy->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Dairy $dairy)
    {
        $journal = Journal::find($dairy->journal_id);
        return $user->id===$journal->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Dairy $dairy)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Dairy  $dairy
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Dairy $dairy)
    {
        //
    }
}
