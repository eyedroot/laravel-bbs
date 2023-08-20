<?php

namespace Beaverlabs\Board\Policies;

use Beaverlabs\Board\Models\Board\BoardCategory;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, BoardCategory $category): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, BoardCategory $category): bool
    {
    }

    public function delete(User $user, BoardCategory $category): bool
    {
    }

    public function restore(User $user, BoardCategory $category): bool
    {
    }

    public function forceDelete(User $user, BoardCategory $category): bool
    {
    }
}
