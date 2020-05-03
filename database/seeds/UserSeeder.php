<?php

use App\User;
use App\Action;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 3)->create()->each(function ($user) {
            $user->actions()->createMany(factory(Action::class, 3)->make()->toArray());
        });
    }
}
