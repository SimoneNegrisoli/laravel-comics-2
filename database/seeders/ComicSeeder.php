<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('db.comics');
        //dd($data);

        foreach ($data as $el) {
            $new_comic = new Comic();
            $new_comic->title = $el['title'];
            $new_comic->description = $el['description'];
            $new_comic->thumb = $el['thumb'];
            $new_comic->price = $el['price'];
            $new_comic->sale_date = $el['sale_date'];
            $new_comic->series = $el['series'];
            $new_comic->type = $el['type'];
            $new_comic->save();
        }
    }
}
