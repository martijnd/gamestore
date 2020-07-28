<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $fillable = [
        'name',
        'genre_id',
        'company_id',
        'publisher_id',
        'release_date',
        'rating',
    ];

    /**
     * Define the genre relation.
     * @return BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    /**
     * Define the company relation.
     * @return BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Define the publisher relation.
     * @return BelongsTo
     */
    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }
}
