<?php

namespace App\Policies;

use App\User;
use App\Entry;
use Illuminate\Auth\Access\HandlesAuthorization;

class EntryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view, update, or delete the entry.
     *
     * @param  \App\User  $user
     * @param  \App\Entry  $entry
     * @return mixed
     */
    public function manage(User $user, Entry $entry)
    {
        return $entry->user->id == $user->id;
    }
}
