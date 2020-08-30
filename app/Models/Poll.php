<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Poll extends Model
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'results',
    ];

    /**
     * Get the options for the poll.
     */
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function getResultsAttribute() {
        $votes = 0;

        foreach ($this->options as $option) {
            $votes += $option->votes()->count();
        };

        $percentages = collect();

        $this->options->each(function ($option) use ($percentages, $votes) {
            $percentages->push([
              'title' => $option->title,
              'percentage' => $option->votes()->count() > 0 ? ($option->votes()->count() / $votes) * 100 : 0,
              'votes' => $option->votes()->count()
            ]);
        });

        return $percentages;
    }
}
