<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'role_id' => "1",
            'name' => 'Phuong',
            'email' => 'daothiphuong1997@gmail.com',
            'password' => bcrypt('matkhau')
        ]]);
      
       
        // $this->call(RolesTableSeeder::class);
        // $this->call(TagsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
    }
}
