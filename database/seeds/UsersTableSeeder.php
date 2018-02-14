<?php

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
        for ($i=0; $i<=10; $i++ )
        DB::table('users')->insert([
            'name' => 'JhonDoe' . $i,
            'email' => 'JhonDoe' . $i.'@test.com',
            'password' => bcrypt('0000'),
        ]);
    }
}
