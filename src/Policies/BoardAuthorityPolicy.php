<?php

namespace Beaverlabs\Board\Policies;

use Beaverlabs\Board\Models\Board\BoardAuthority;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\User;

class BoardAuthorityPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, BoardAuthority $boardAuthority): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, BoardAuthority $boardAuthority): bool
    {
    }

    public function delete(User $user, BoardAuthority $boardAuthority): bool
    {
    }

    public function restore(User $user, BoardAuthority $boardAuthority): bool
    {
    }

    public function forceDelete(User $user, BoardAuthority $boardAuthority): bool
    {
    }
}
