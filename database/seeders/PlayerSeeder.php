<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::create([
            'fname'=>'tayeb',
            'lname'=>'souini',
            'age'=>30,
            'poids'=>75,
            'leg'=>'both',
            'longueur'=>180,
            'team_id'=> 1
        ]);


        Player::create([
            'fname'=>'zakaria',
            'lname'=>'labjioui',
            'age'=>23,
            'poids'=>80,
            'leg'=>'leftleg',
            'longueur'=>180,
            'team_id'=> 2
        ]);



        Player::create([
            'fname'=>'mohammed',
            'lname'=>'labjioui',
            'age'=>15,
            'poids'=>66,
            'leg'=>'rightleg',
            'longueur'=>188,
            'team_id'=> 3
        ]);
    }
}
