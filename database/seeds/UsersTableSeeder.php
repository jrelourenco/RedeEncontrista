<?php

use Illuminate\Database\Seeder;
use \App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Model\User();

        $user->email = "root@shalom.pt";
        $user->name = "Root";
        $user->nickname = "Root";

        $user->password = bcrypt('123456');
        $user->remember_token = str_random(10);

        $user->save();
    }
}
