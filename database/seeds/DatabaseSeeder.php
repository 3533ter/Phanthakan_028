<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \app\User();
        $user->name = 'Phanthakan Phithakratsadon';
        $user->email = 'ter@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

    }
}
