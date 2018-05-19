<?php

use App\Report;
use App\User;
use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            factory(Report::class, 20)->create([
                'user_id' =>  $user,
            ]);
        });
    }
}
