<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Team::create([
        'name'=>'real madrid',
        'pays'=>'espagne',
        'ville'=>'madrid',
        'date_creation'=>"7-12-1989"

       ]);



       Team::create([
        'name'=>'kac',
        'pays'=>'maroc',
        'ville'=>'kenitra',
        'date_creation'=>"7-12-1986"

       ]);



       Team::create([
        'name'=>'wac',
        'pays'=>'maroc',
        'ville'=>'casa',
        'date_creation'=>"9-11-1990"

       ]);

    }
}
