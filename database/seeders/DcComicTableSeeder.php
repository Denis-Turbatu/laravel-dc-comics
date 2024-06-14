<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        dd($data);
    }
}
