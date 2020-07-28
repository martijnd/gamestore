<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'company_id',
        'publisher_id',
        'release_date',
        'rating',
    ];
}
