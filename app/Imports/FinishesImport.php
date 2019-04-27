<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Stone;
use App\Finish;

class FinishesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // return new User([
        //     //
        //     'title'         => $row[1],
        // ]);
    

        $stone = Stone::where('title',$row[1])->first();



        if(is_object($stone)) {
            echo "TAK:". "\n";
            $finish = new Finish();                                

            if ($row[7]) { $finish->polerowany = true; }
            if ($row[8]) { $finish->szlifowany = true; }
            if ($row[9]) { $finish->satynowany = true; }
            if ($row[10]) { $finish->waterjet = true; }
            if ($row[11]) { $finish->waterjet_piaskowany = true; }
            if ($row[12]) { $finish->antykowany = true; }
            if ($row[13]) { $finish->płomieniowany = true; }
            if ($row[14]) { $finish->piaskowany = true; }
            if ($row[15]) { $finish->płomieniowany_szczotkowany = true; }
            if ($row[16]) { $finish->piaskowany_szczotkowany = true; }
            if ($row[17]) { $finish->nacinany = true; }
            if ($row[18]) { $finish->corteccia = true; }
            if ($row[19]) { $finish->wenghe = true; }
            if ($row[20]) { $finish->juta = true; }
            if ($row[21]) { $finish->wood = true; }
            if ($row[22]) { $finish->canvas = true; }
            if ($row[23]) { $finish->tranche = true; }
            if ($row[24]) { $finish->jodełka = true; }

            $stone->finish()->save($finish);

        } else {
            echo "ERROE:" . $row[1] . '\n';
        }

    }
}
