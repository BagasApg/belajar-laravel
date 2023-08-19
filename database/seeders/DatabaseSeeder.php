<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            User::create([
                    'name' => 'Bagas Arianto',
                    'username' => 'bagasarianto',
                    'email' => 'bagasap@gmail.com',
                    'password' => bcrypt('12345')
                ]);
                
                // User::create([
                    //     'name' => 'Dodi Kenala',
                    //     'email' => 'dodi@gmail.com',
                    //     'password' => bcrypt('12345')
                    // ]);
                    
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem. Ab at, quo ut vitae sit veritatis commodi. Soluta laudantium repellat reprehenderit alias commodi? Quam maiores officia, similique illum laborum reprehenderit esse enim aliquam pariatur beatae, nulla possimus numquam iure? Tempore facere modi sunt ratione temporibus voluptatem autem voluptatibus cupiditate, quod rerum eaque, cum voluptate blanditiis repudiandae! Numquam pariatur quisquam esse similique doloribus autem ratione atque, quae reprehenderit magnam nam illum, aperiam, officia quasi sed impedit dolorum exercitationem? Illum voluptate sequi doloribus esse necessitatibus nihil, temporibus porro, dolor fugiat expedita dolorem?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        //  Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem. Ab at, quo ut vitae sit veritatis commodi. Soluta laudantium repellat reprehenderit alias commodi? Quam maiores officia, similique illum laborum reprehenderit esse enim aliquam pariatur beatae, nulla possimus numquam iure? Tempore facere modi sunt ratione temporibus voluptatem autem voluptatibus cupiditate, quod rerum eaque, cum voluptate blanditiis repudiandae! Numquam pariatur quisquam esse similique doloribus autem ratione atque, quae reprehenderit magnam nam illum, aperiam, officia quasi sed impedit dolorum exercitationem? Illum voluptate sequi doloribus esse necessitatibus nihil, temporibus porro, dolor fugiat expedita dolorem?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem. Ab at, quo ut vitae sit veritatis commodi. Soluta laudantium repellat reprehenderit alias commodi? Quam maiores officia, similique illum laborum reprehenderit esse enim aliquam pariatur beatae, nulla possimus numquam iure? Tempore facere modi sunt ratione temporibus voluptatem autem voluptatibus cupiditate, quod rerum eaque, cum voluptate blanditiis repudiandae! Numquam pariatur quisquam esse similique doloribus autem ratione atque, quae reprehenderit magnam nam illum, aperiam, officia quasi sed impedit dolorum exercitationem? Illum voluptate sequi doloribus esse necessitatibus nihil, temporibus porro, dolor fugiat expedita dolorem?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis laborum voluptates quia, reprehenderit temporibus vel atque cupiditate illum rem. Ab at, quo ut vitae sit veritatis commodi. Soluta laudantium repellat reprehenderit alias commodi? Quam maiores officia, similique illum laborum reprehenderit esse enim aliquam pariatur beatae, nulla possimus numquam iure? Tempore facere modi sunt ratione temporibus voluptatem autem voluptatibus cupiditate, quod rerum eaque, cum voluptate blanditiis repudiandae! Numquam pariatur quisquam esse similique doloribus autem ratione atque, quae reprehenderit magnam nam illum, aperiam, officia quasi sed impedit dolorum exercitationem? Illum voluptate sequi doloribus esse necessitatibus nihil, temporibus porro, dolor fugiat expedita dolorem?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
