<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => env('DEV_NAME', 'dot env'),
            'email' => env('DEV_EMAIL', 'you-should-set-me@env.local'),
        ]);

        factory(User::class, 50)->create();
    }
}
