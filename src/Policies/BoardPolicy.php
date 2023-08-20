<?php

namespace Beaverlabs\Board\Policies;

use Beaverlabs\Board\Models\Board\Board;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoardPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Board $board): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Board $board): bool
    {
    }

    public function delete(User $user, Board $board): bool
    {
    }

    public function restore(User $user, Board $board): bool
    {
    }

    public function forceDelete(User $user, Board $board): bool
    {
    }
}
