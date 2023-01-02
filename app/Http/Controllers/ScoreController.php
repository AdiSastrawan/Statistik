<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $score = Score::all();
        return view('layouts.master', compact('score'));
    }
    public function store(Request $request)
    {
        $score = new Score();
        $score->score = $request->score;
        $score->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        Score::findOrFail($id)->delete();
        return redirect()->back();
    }
}
