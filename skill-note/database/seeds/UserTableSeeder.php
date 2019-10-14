<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'adminTJ',
            'email' => 'maxtj1122@gmail.com',
            'password' => '$SN.fP8e5AA4ZrG',
        ];

        Db::table('users')->insert($param);
    }
}
