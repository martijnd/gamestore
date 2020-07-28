<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'company_id',
        'publisher_id'
    ];
}
