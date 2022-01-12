<?php

use Illuminate\Database\Seeder;
use App\Comics;
use Illuminate\Support\Facades\Log;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics_seed');
        foreach ($comics as $istance) {
            $newComics = new Comics();
            $newComics->c_id = NULL;
            $newComics->c_title = $istance["title"];
            $newComics->c_description = $istance["description"];
            $newComics->c_thumb = $istance["thumb"];
            $newComics->c_price = $istance["price"];
            $newComics->c_series = $istance["series"];
            $newComics->c_saledate = $istance["sale_date"];
            $newComics->c_type = $istance["type"];
            $newComics->save();
        }
        /*
        for ($i = 0; $i < 100; $i++) {
            $newComics = new Comics();
            $newComics->tp_id = NULL;
            $newComics->tp_name = $faker->name;
            $newComics->tp_locations = $faker->city;
            $newComics->tp_price = $faker->randomDigit();
            $newComics->tp_description = $faker->text;
            $newComics->save();
        }*/
    }
}
