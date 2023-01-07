<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ScoreImport;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Score::all();
        $total = Score::sum('score');
        $min = Score::min('score');
        $max = Score::max('score');
        $average = Score::avg('score');
        $freq = Score::all()->countBy(function ($item) {
            return $item['score'];
        })->toArray();

        $score = [
            "value" => $scores,
            "total" => $total,
            "min" => $min,
            "max" => $max,
            "average" => $average,
            "freq" => max($freq),
            "freq_key" => array_search(max($freq), $freq)

        ];



        return view('layouts.master', compact('score'));
    }
    public function scoreFreq()
    {
        $freq = Score::all()->countBy(function ($item) {
            return $item['score'];
        })->toArray();
        return view('layouts.masterfreq', compact('freq'));
    }
    public function store(Request $request)
    {
        $score = new Score();
        $score->score = $request->score;
        $score->save();
        Alert::success('Success Title', 'Success Message');
        alert()->success('Title', 'Lorem Lorem Lorem');
        return redirect()->back()->with('toast_success', 'Created Successfully!');
    }
    public function destroy($id)
    {
        Score::findOrFail($id)->delete();
        return redirect()->back()->with('toast_success', 'Deleted Successfully!');
    }
    public function update(Request $request, $id)
    {
        $data = Score::find($id);
        $data->score = $request->score;
        $data->save();
        return redirect()->back()->with('toast_success', 'Updated Successfully!');
    }
    public function importExcel(Request $request)
    {

        if ($request->hasFile('score')) {
            $namaFile = $request->file('score')->getClientOriginalName();
            $request->file('score')->move(public_path() . '/scoreData', $namaFile);
        }

        Excel::import(new ScoreImport, public_path('/scoreData/' . $namaFile));
        return redirect()->back()->with('toast_success', 'Imported Successfully!');
    }
}
