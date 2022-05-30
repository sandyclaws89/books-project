<?php

use Illuminate\Database\Seeder;
use App\Book;
use Faker\Generator as Faker;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker ->addProvider(new \Faker\Provider\it_IT\Person($faker));

        for ($i=1; $i <= 40; $i++) {
            $bookData = [
                'title'                 =>  $faker->sentence(rand(1, 4)),
                'cover_image'           =>  'https://picsum.photos/id/' . rand(0, 1084) . '/640/480',
                'short_description'     =>  $faker->sentence(rand(8, 20)),
                'author'                =>  $faker->name(),
                'price'                 =>  $faker->randomFloat(1, 4, 150),
                'genre'                 =>  $faker->randomElement(['Horror', 'Dramatic', 'Romantic', 'Essay', 'Adult','Historical']),
                'synopsis'              =>  $faker->paragraph(),
                'review'                =>  $faker->randomFloat(1, 0, 5),
                'edition'               =>  $faker->words(rand(1, 5), true),
                'publishing_house'      =>  $faker->words(rand(1, 4), true),
                'pubblication_date'     =>  $faker->date(),
                'checkin_date'          =>  $faker->date(),
                'available'             =>  $faker->boolean(),
                'quantity'              =>  $faker->numberBetween(1, 199),
            ];
            $book = new Book();
            $book->fill($bookData);
            $book->save();
        }
    }
}
