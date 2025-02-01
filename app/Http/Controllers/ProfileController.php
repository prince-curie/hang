<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
            'email' => 'prince.chibuike@gmail.com',
            'current_datetime' => now()->toIso8601String(),
            'github_url' => 'https://github.com/prince-curie/hang'
        ];

        return response()->json($data);
    }
}
