<?php
namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

/*class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can edit the post.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return mixed
     */
   
     /*public function update(User $user, Post $post): Response
    {
        return $user->hasRole('super-admin') || $user->id === $post->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to update this post.');
    }

    public function delete(User $user, Post $post): Response
    {
        return $user->hasRole('super-admin') || $user->id === $post->user_id
            ? Response::allow()
            : Response::deny('You do not have permission to delete this post.');
    }
}*/


