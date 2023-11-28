<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    // 自己只能更新自己
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    // 自己不能删除自己 管理员才可删除
    public function destroy(User $currentUser, User $user)
    {
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    // 自己不能关注或取关自己
    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id;
    }
}
