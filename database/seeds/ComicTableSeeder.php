<?php

namespace ComicSeeder;
use Illuminate\Database\Seeder;

use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = config('comics');

	    foreach($data as $item){

            $newComic = new Comic();
            $newComic = fill($item);   //alternativa per non scrivere tutta la pappardella sotto

            //$newComic->title = $item['title'];
            //$newComic->description = $item['description'];
            //$newComic->thumb = $item['thumb'];
            //$newComic->price = $item['price'];
            //$newComic->serie = $item['series'];
            //$newComic->sale_date = $item['sale_date'];
            //$newComic->type = $item['type'];

            $newComic->save();


        }
    }

}
