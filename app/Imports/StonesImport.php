<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Collection;
use App\Stone;
use App\Option;
use App\Finish;
use App\Stonetype;

class StonesImport implements ToModel
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
    

        $stonetype = Stonetype::firstOrCreate(['title' => $row[7]]);


        $stone = new Stone();
        $stone->title = ucwords(strtolower(trim($row[1])));
        $stone->sort_all = $row[2];
        
        if ($row[3] ) { 
            $stone->sort_collection = $row[3];
        } elseif ($row[4]) {
            $stone->sort_collection = $row[4];
        } elseif ($row[5]) {
            $stone->sort_collection = $row[5];
        }


        $stone->stonetype_id = $stonetype->id;        
        $stone->save();

        $option = new Option();

        if ($row[8]) { $option->top = true; }
        if ($row[9]) { $option->floor = true; }
        if ($row[10]) { $option->wall = true; }
        if ($row[11]) { $option->upstairs = true; }
        if ($row[12]) { $option->bathroom = true; }
        if ($row[13]) { $option->fireplace = true; }
        if ($row[14]) { $option->windowsill = true; }
        if ($row[15]) { $option->outide = true; }
        if ($row[16]) { $option->frost = true; }

        $stone->options()->save($option);


        if ($row[6]) {
            
            $collection = Collection::firstOrCreate(['title' => $row[6]]);
            $stone->collections()->attach($collection);        

        } else {

            $collection = Collection::firstOrCreate(['title' => 'Pozostałe']);
            $stone->collections()->attach($collection);        
        }


        // $finish = new Finish();                                


        // if ($row[17]) { $finish->polerowany = true; }
        // if ($row[18]) { $finish->szlifowany = true; }
        // if ($row[19]) { $finish->satynowany = true; }
        // if ($row[20]) { $finish->waterjet = true; }
        // if ($row[21]) { $finish->waterjet_piaskowany = true; }
        // if ($row[22]) { $finish->antykowany = true; }
        // if ($row[23]) { $finish->płomieniowany = true; }
        // if ($row[24]) { $finish->piaskowany = true; }
        // if ($row[25]) { $finish->płomieniowany_szczotkowany = true; }
        // if ($row[26]) { $finish->piaskowany_szczotkowany = true; }
        // if ($row[27]) { $finish->nacinany = true; }
        // if ($row[28]) { $finish->corteccia = true; }
        // if ($row[29]) { $finish->wenghe = true; }
        // if ($row[30]) { $finish->juta = true; }
        // if ($row[31]) { $finish->wood = true; }
        // if ($row[32]) { $finish->canvas = true; }
        // if ($row[33]) { $finish->tranche = true; }
        // if ($row[34]) { $finish->jodełka = true; }

        // $stone->finish()->save($finish);



       //Resize image here
        // $imagepath = public_path('storage/main.jpg');
        // $thumbnailpath = public_path('storage/main_after.jpg');
        // $img = Image::make($imagepath)->resize(400, 150, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($thumbnailpath);        


    }
}
