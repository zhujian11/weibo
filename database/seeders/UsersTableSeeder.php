<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory()->count(50)->create();

        $user = User::find(1);
        $user->name = 'zhujian';
        $user->email = 'zj941026@gmail.com';
        $user->save();
    }
}
