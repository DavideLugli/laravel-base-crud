<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
protected $fillable = [
'name',
'artist',
'year',
'songs_number',
'genre' 
];
}
