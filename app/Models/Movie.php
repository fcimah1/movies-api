<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = "movie";
    
    protected $fillable = [ 'name',
    'description',
    'production_date',
    'director',
    'duration',
    'image',
    'rate',
    'genre_id'];
}

