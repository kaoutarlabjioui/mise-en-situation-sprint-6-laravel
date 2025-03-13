<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


protected $fillable = [
    'name',
    'pays',
    'ville',
    'date_creation'
];



public function players()
{
    return $this->hasMany(Player::class);
}




}
