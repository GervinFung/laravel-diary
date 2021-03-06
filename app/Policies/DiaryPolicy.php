<?php

namespace App\Policies;

use App\Models\Journal;
use App\Models\Diary;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiaryPolicy
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
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Diary $diary, $journalId)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user, Diary $diary)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Diary $diary)
    {
        $journal = Journal::find($diary->journal_id);
        return $user->id === $journal->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Diary $diary)
    {
        $journal = Journal::find($diary->journal_id);
        return $user->id === $journal->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Diary $diary)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Diary  $diary
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Diary $diary)
    {
        //
    }
}
