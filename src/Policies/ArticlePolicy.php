<?php

namespace Beaverlabs\Board\Policies;

use Beaverlabs\Board\Models\Article\Article;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Article $article): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Article $article): bool
    {
    }

    public function delete(User $user, Article $article): bool
    {
    }

    public function restore(User $user, Article $article): bool
    {
    }

    public function forceDelete(User $user, Article $article): bool
    {
    }
}
