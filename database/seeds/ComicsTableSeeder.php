<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;


class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            
            $comic = new Comic();
            $comic->title = $faker->text('50');
            $comic->price = $faker->numberBetween(20, 100);
            $comic->thumb = $faker->text('100');
            $comic->series = $faker->text('100');
            $comic->description= $faker->text('100');
            $comic->sale_date = $faker->dateTimeThisYear();
            $comic->save();
        }
    }
}
