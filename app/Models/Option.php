<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Poll;

class Option extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title',
    ];

    /**
     * Get the options for the poll.
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * Get the options for the poll.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
