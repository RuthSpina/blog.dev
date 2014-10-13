<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();

        $user->email = 'hello';
        $user->password = 'pass123';

        $user->save();
    }

}
