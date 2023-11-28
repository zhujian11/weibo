<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 获取去除id为1的所有用户id数组
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // 关注除1以外的所有用户
        $user->follow($follower_ids);

        // 除了1号用户都来关注1号
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
