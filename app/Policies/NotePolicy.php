<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Note;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class NotePolicy
 *
 * @package App\Policies
 */
class NotePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can delete the note.
     *
     * @param  User  $user  The resource entity from the authenticated user.
     * @param  Note  $note  The resource entity from the given note.
     * @return bool
     */
    public function delete(User $user, Note $note): bool
    {
        return $user->hasAnyRole(['admin', 'webmaster']) || $user->is($note->createor);
    }
}
