<?php

namespace App\Imports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\ToModel;

class ExecelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Excel([
            'txn_date'=>$row[0],
            'pin'=>$row[1],
            'receiver_number'=>$row[2],
            'amount'=>$row[3],
            'sender_number'=>$row[4],
            'address'=>$row[5],
            'bank_name'=>$row[6],
            'bank_branch'=>$row[7],
            'country'=>$row[8],
            'payment_mode'=>$row[9],

        ]);
    }
}
