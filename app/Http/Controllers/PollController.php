<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Option;
use Illuminate\Database\Eloquent\Builder;

class PollController extends Controller
{
    public function view(Poll $poll) {
        $votes = Option::wherePollId($poll->id)
            ->whereHas('votes', function (Builder $query) {
              $query->whereIp(\Request::ip());
            })->count();

        if ($votes > 0) {
          return response()->json([
              'poll' => $poll->id,
              'message' => 'You already voted. What are you trying to achieve here, slick?',
          ], 200);
        }

        return response()->json([
            'poll' => $poll->load('options'),
        ], 200);
    }

    public function store() {
        \Log::info(\Request::all());
        $poll = Poll::create([
            'title' => \Request::input('title'),
        ]);

        collect(\Request::input('options'))->each(function ($option) use ($poll) {
            $poll->options()->create($option);
        });

        return response()->json([
            'poll' => $poll->id,
            'message' => 'You did it, champ! Your parents haven\'t been as proud of you since middle school.',
        ], 200);
    }

    public function results(Poll $poll) {
      return response()->json([
          'poll' => $poll,
      ], 200);
    }
}
