<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Collection;
use App\Stone;
use App\Option;
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
        $stone->title = $row[1];
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
        }


       //Resize image here
        // $imagepath = public_path('storage/main.jpg');
        // $thumbnailpath = public_path('storage/main_after.jpg');
        // $img = Image::make($imagepath)->resize(400, 150, function($constraint) {
        //     $constraint->aspectRatio();
        // });
        // $img->save($thumbnailpath);        


    }
}
