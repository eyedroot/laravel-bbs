<?php

namespace Beaverlabs\Board\Policies;

use App\User;
use Beaverlabs\Board\Models\Article\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Category $category): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Category $category): bool
    {
    }

    public function delete(User $user, Category $category): bool
    {
    }

    public function restore(User $user, Category $category): bool
    {
    }

    public function forceDelete(User $user, Category $category): bool
    {
    }
}
