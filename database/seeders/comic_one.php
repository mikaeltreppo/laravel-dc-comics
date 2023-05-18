<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class comic_one extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic_out = config('comic');

        foreach ($comic_out as $comic) {
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];
            $new_comic->save();
        }
    }
}