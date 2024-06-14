<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class DcComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // creo variabile data e passo dalla folder '/config/' il file comics.php
        $data = config('comics');
        // degub
        // dd($data);
        // foreach per ciclare tutti i comics
        foreach ($data as $comic) {
            // passare a newComic il model Comic
                $newComic = new Comic;

            // fill() per inserire tutti i dati all'interno di ogni comic(fill perche i nome degli attributi in comics.php corrispondono ai nome delle colonne in DB)
                $newComic->fill($comic);

            // debug
                // dd($newComic);

            // salvataggio dei dati nel DB
                $newComic->save();
        }
    }
}
