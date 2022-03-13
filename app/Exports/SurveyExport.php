<?php

namespace App\Exports;

use App\Models\Survey;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class SurveyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $result = Survey::where('user_id', '=', Auth::user()->id)->where('id', '=', $_GET['id'])->first();

        $qno = [];

        for ($i=0; $i <= count($result->questions); $i++) {
            $qno[$i] = 'Q'.$i;
        }

        $row = [];
        $row['qno'] = $qno;
        $no = 1;
        foreach ($result->answers->sortBy('respondent_id') as $answer){
            $row[$answer['respondent_id']]['respondent_id'] = $answer['respondent_id'];
            $row[$answer['respondent_id']][$no] = $answer['answer'];
            $no++;
        }

        $row['qno'][0] = 'respondent_id';

        // dd($row);

        return collect($row);
    }
}
