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
        $this->call(Post_typesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
//        $this->call(MediaTableSeeder::class);
//        $this->call(PostsTableSeeder::class);
    }
}
