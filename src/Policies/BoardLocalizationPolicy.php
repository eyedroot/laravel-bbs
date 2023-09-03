<?php

namespace Beaverlabs\Board\Policies;

use Beaverlabs\Board\Models\Board\BoardLocalization;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoardLocalizationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, BoardLocalization $boardLocalization): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, BoardLocalization $boardLocalization): bool
    {
    }

    public function delete(User $user, BoardLocalization $boardLocalization): bool
    {
    }

    public function restore(User $user, BoardLocalization $boardLocalization): bool
    {
    }

    public function forceDelete(User $user, BoardLocalization $boardLocalization): bool
    {
    }
}
