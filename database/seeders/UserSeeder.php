<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Administator';
        $user->email = 'admin@sandbox.com';
        $user->password = Hash::make('adminpass');
        $user->save();

        $user = new User();
        $user->name = 'Alice';
        $user->email = 'alice@wonderland.com';
        $user->password = 'eatmeplease';
        $user->save();

        User::factory()->count(10) // 10 users
            ->hasPosts(4) // each user has 3 posts
            ->create(); // persist to database
    }
}
