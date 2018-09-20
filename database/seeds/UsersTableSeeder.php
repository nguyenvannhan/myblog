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
        DB::table('users')->insert([
            ['role_id' => "1", 'name' => 'Phuong', 'email' => 'daothiphuong1997@gmail.com', 'password' => bcrypt('matkhau')],
            ['role_id' => "1", 'name' => 'Nhan', 'email' => 'NhanNV@gmail.com', 'password' => bcrypt('matkhau')],
            ['role_id' => "2", 'name' => 'Hihi', 'email' => 'hihi@gmail.com', 'password' => bcrypt('matkhau')],
            ['role_id' => "3", 'name' => 'Haha', 'email' => 'haha@gmail.com', 'password' => bcrypt('matkhau')],
            ['role_id' => "3", 'name' => 'Kaka', 'email' => 'Kaka@gmail.com', 'password' => bcrypt('matkhau')]

        ]);
    }
}
