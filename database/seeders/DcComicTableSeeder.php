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
        foreach ($data as $comic) {
            $newComic = new Comic;
            $newComic->fill($comic);
            // dd($newComic);
            $newComic->save();
        }
    }
}
