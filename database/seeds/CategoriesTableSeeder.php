<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Let's truncate our existing records to start from scratch.
        Category::truncate();
            $data = '[
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-fingerfoods2.jpg",
              "Name" : "FINGER FOODS"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-westernsoup1.jpg",
              "Name" : "WESTERN SOUPS"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-easternsoup.jpg",
              "Name" : "EASTERN SOUPS"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-sandwich.jpg",
              "Name" : "SANDWICHES"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-pizza.jpg",
              "Name" : "PIZZA"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-pasta1.jpg",
              "Name" : "PASTA"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-chicken.jpg",
              "Name" : "CHICKEN"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-fish.jpg",
              "Name" : "FISH"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-vegetarian.jpg",
              "Name" : "CHINESE VEGETARIAN"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-delights.jpg",
              "Name" : "MEDIFOODS DELIGHTS"
            },
            {
              "Image" : "http://medifoods.my/wp-content/uploads/2015/03/cover-menu-snacks.jpg",
              "Name" : "SNACKS"
            }]';

        // Initialize the Faker package. We can use several different locales for it, so
        // let's use the german locale to play with it.

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < count(json_decode($data)); $i++) {
            Category::create([
                'name' => json_decode($data)[$i]->Name,
                'image' => json_decode($data)[$i]->Image,
            ]);
        }
        
        
    }
}
