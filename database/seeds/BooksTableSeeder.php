<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++){
        $newBook = new Book();
        $newBook->titolo = $faker->sentence(3);
        $newBook->autore = $faker->lastName();
        $newBook->genere = $faker->word();

        $newBook->save();
      }
    }
}
