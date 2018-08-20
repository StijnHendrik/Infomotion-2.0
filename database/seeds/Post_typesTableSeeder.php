<?php

use Illuminate\Database\Seeder;

class Post_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Post_type::class, 5)->create()->each(function ($u) {
//            $u->post_types()->save(factory(App\Post_type::class)->make());
//        });

        DB::table('post_types')->insert([
            [
                'type' => 'media'
            ],
            [
                'type' => 'text'
            ],
            [
                'type' => 'quote'
            ],
            [
                'type' => 'menu'
            ]
        ]);
    }
}
