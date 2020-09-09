<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'genre_id',
        'company_id',
        'publisher_id',
        'released_at',
        'rating',
    ];

    /**
     * Define the user relation.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Define the genre relation.
     *
     * @return BelongsTo
     */
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    /**
     * Define the company relation.
     *
     * @return BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Define the publisher relation.
     *
     * @return BelongsTo
     */
    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }
}
