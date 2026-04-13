<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;


class LogController extends Controller
{
    public function index()
    {
        return view('weights.index');
    }

    public function store(Request $request)
    {
        Log::create([
            'date' => $request->date,
            'weight' => $request->weight,
            'calories' => $request->calories,
            'exercise_time' => $request->exercise_time,
            'exercise_content' => $request->exercise_content,
        ]);

        return redirect('/weight_logs');
    }
}
