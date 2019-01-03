<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);



        DB::table('users')->insert([
            'name' => 'Kader',
            'email' => 'kader@gmail.com',
            'password' => bcrypt('kader'),
        ]);



        DB::table('users')->insert([
            'name' => 'Junior',
            'email' => 'junior@gmail.com',
            'password' => bcrypt('junior'),
        ]);



        DB::table('medias')->insert([
            'title' => 'image1.jpg',
            'dimension' => '140',
            'link_image' => 'C/O https://placeholder.com/',
        ]);

        DB::table('medias')->insert([
            'title' => 'image2.jpg',
            'dimension' => '140',
            'link_image' => 'C/O https://placeholder.com/',
        ]);


        DB::table('posts')->insert([
            'media_id' => '1',
            'post_type' => 'video',
            'title' => 'Video 1',
            'duration' => '5',
            'date' => '2019/01/03',
            'price' => '10',
            'content' => 'blalblalal',
            'statut' => 'open',
            'link_video' => 'youtube.com',
        ]);



        DB::table('posts')->insert([
            'media_id' => '2',
            'post_type' => 'video',
            'title' => 'Video 2',
            'duration' => '10',
            'date' => '2019/01/03',
            'price' => '10',
            'content' => 'blalblalal',
            'statut' => 'close',
            'link_video' => 'youtube.com',
        ]);

        


        DB::table('categories')->insert([
            'parent_id' => NULL,
            'name' => 'Initiation',
        
        ]);


        DB::table('categories')->insert([
            'parent_id' => NULL,
            'name' => 'Perfectionnement',
            
        ]);


        DB::table('categorie_post')->insert([
            'post_id' => 1,
            'categorie_id' => 1,
            
        ]);


        DB::table('categorie_post')->insert([
            'post_id' => 2,
            'categorie_id' => 2,
            
        ]);


        
    }
}
