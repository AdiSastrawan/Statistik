<?php

namespace App\Imports;

use Illuminate\Support\Facades\DB;
use App\Models\Score;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ScoreImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Score([
            'score' => $row['score']
        ]);
    }
}
