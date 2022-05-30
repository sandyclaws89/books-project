<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'cover_image',
        'short_description',
        'author',
        'price',
        'genre',
        'synopsis',
        'review',
        'edition',
        'publishing_house',
        'pubblication_date',
        'checkin_date',
        'available',
        'quantity'
    ];
}
