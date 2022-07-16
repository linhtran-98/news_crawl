<?php

use Illuminate\Database\Seeder;

class ItemPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake  = Faker\Factory::create();
        $limit = 20;

        for ($i = 0; $i < $limit; $i++){
            DB::table('posts')->insert([
                'image' => $fake->imageUrl($width = 200, $height = 200),
                'title' => $fake->name,
                'summary' => $fake->name,
                'description' => $fake->sentence,
                'publish' => 0,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
