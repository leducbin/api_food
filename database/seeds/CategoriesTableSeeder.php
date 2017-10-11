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
        Category::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and
        // let's hash it before the loop, or else our seeder
        // will be too slow.

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 7; $i++) {
            Category::create([
                'name' => "Món ăn bánh bao ".$i,
                'image' => "upload/".$i.".png",
                'price' => random_int(10000, 20000),
            ]);
        }
    }
}
