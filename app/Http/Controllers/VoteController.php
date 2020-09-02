<?php

namespace App\Http\Controllers;

use App\Models\Option;

class VoteController extends Controller
{
    public function __invoke(Option $option) {
        $option->votes()->create([
            'ip' => \Request::ip(),
            'profile_id' => \Request::input('profile'),
        ]);

        return response()->json([
            'message' => 'Awesome opinion, buddy! You are now seeing the results. Just felt like pointing it out, no particular reason.',
        ], 200);
    }
}
