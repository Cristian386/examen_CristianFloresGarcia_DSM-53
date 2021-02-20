<?php
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Seeder;
use App\categories;
use App\images;
use App\post_tag;
use App\Posts;
use App\tags;
use App\Users;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
        Users::factory(100)->create();
        Posts::factory(100)->create();
        tags::factory(100)->create();
        categories::factory(100)->create();
        post_tags::factory(100)->create();
        images::factory(100)->create();
    }
}
