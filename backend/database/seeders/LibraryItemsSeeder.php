<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibraryItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('library_items')->insert([
            'docTitle'=>'PHP 8 Intro',
            'docImage'=>'dghaekjugrgf.jpg',
            'docAuthor'=>'Milicent Potter',
            'docDescription'=>'A quick guide to PHP 8 and its new syntaxis and functions',
            'docFile'=>'dsjhs.pdf'

        ]);

        DB::table('library_items')->insert([
            'docTitle'=>'React EZ',
            'docImage'=>'dghaekjugrgf.jpg',
            'docAuthor'=>'Mark Zuckerberg',
            'docDescription'=>'A quick guide to React and its new syntaxis and functions',
            'docFile'=>'dsjhs.pdf'

        ]);

        DB::table('library_items')->insert([
            'docTitle'=>'Laravel Indeed',
            'docImage'=>'dghaekjugrgf.jpg',
            'docAuthor'=>'Ms. Lala Laravel',
            'docDescription'=>'A quick guide to Laravel 9 and its new syntaxis and functions',
            'docFile'=>'dsjhs.pdf'

        ]);
    }
}
