<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function __invoke() {
        $profile = Profile::create([
          'name' => \Request::input('name')
        ]);

        return response()->json([
            'profile' => $profile->only('id', 'name'),
            'message' => 'Profile create successfully!',
        ], 200);
    }
}
