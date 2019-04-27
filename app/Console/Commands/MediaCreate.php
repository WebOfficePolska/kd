<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Location;
use App\Mediaresource;
use App\Stone;
use Image;
use Storage;

class MediaCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:MediaCreate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dodaje media';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        
        //$category = Location::where('id','1')->first();

        $srcStorageDirectory = 'stones';

        $stones = Stone::all();
        $stonesCount = $stones->count();
        $i =0;

        foreach ($stones as $stone) {

            $i++;
            //echo $i . '/' .$stonesCount. ':' . $stone->title. "\n";
            //echo $i . '/' .$stonesCount. " ". $stone->title ."\n";
            echo $i . '/' .$stonesCount. "\n";

            //$stone_name = strtolower(str_replace('-', ' ', $stone->title)); 
            $stone_name = strtolower(str_replace(' ', '_',$stone->title)); 
            $stone_new_dir_name = strtolower(str_replace(' ', '_',$stone->title)); 

            //$stone_name = $stone->title; 
            $srcImagePath = storage_path('app/stones/'.$stone->title);
            $dstImagePath = storage_path('app/public/stones/'.$stone_new_dir_name);

            if(Storage::exists('stones/'.$stone->title)) {


                //Pobieramy obraz główny i slidery
                $files = Storage::Files($srcStorageDirectory.'/'.$stone->title);
                //Pobieramy próbki
                $files_samples = Storage::Files($srcStorageDirectory.'/'.$stone->title.'/'.'samples');

                if(!Storage::exists('public/stones/'.$stone_new_dir_name)) {

                    Storage::makeDirectory('public/stones/'.$stone_new_dir_name, 0775, true);

                }

                foreach ($files as $file) {

                    //echo "=======> " . basename($file). "\n";
                
                    if(basename($file) == "main.jpg") {

                        $filename = basename($file);

                        $img = Image::make($srcImagePath.'/'.basename($file))->resize(640, 360);
                        //$img = Image::make($srcImagePath.'/'.basename($file));

                        // $img = Image::make($srcImagePath.'/'.basename($file))->crop(640, 360, function($constraint) {
                        //     //$constraint->aspectRatio();
                        // });


                        $img->save($dstImagePath.'/'.$filename);    

                        $mediaresource = new Mediaresource();
                        $mediaresource->stone_id= $stone->id;
                        $mediaresource->title = $stone->title;
                        $mediaresource->filename = $filename;
                        $mediaresource->filepath = '/storage/stones/'.$stone_name;
                        $mediaresource->filetype_id = 1;
                        $mediaresource->filecategory_id = 3;
                        $mediaresource->save();

                        $stone->thumbnail = $filename;
                        $stone->thumbnail_path = '/storage/stones/'.$stone_name;
                        $stone->save();

                    } else {

                        $filename = 'slider_'.uniqid().'.jpg';

                        $img = Image::make($srcImagePath.'/'.basename($file))->resize(1200, 700);

                        $img->save($dstImagePath.'/'.$filename);   

                        $mediaresource = new Mediaresource();
                        $mediaresource->stone_id= $stone->id;
                        $mediaresource->title = $stone->title;
                        $mediaresource->filename = $filename;
                        $mediaresource->filepath = '/storage/stones/'.$stone_name;
                        $mediaresource->filetype_id = 1;
                        $mediaresource->filecategory_id = 4;
                        $mediaresource->save();

                    }
                                    
                }


                // próbki, dodajemy też main.jpg do próbek
                // $filename = 'main_'.uniqid().'.jpg';

                // $img = Image::make($srcImagePath.'/main.jpg')->resize(1024, 600 , function($constraint) {
                //             //$constraint->aspectRatio();
                // });                
                
                // $img->save($dstImagePath.'/'.$filename);   

                // $mediaresource = new Mediaresource();
                // $mediaresource->stone_id= $stone->id;
                // $mediaresource->title = "polerowany";
                // $mediaresource->filename = $filename;
                // $mediaresource->filepath = '/storage/stones/'.$stone_name;
                // $mediaresource->filetype_id = 1;
                // $mediaresource->filecategory_id = 5; //Próbka da main.jp
                // $mediaresource->sort = 0; 
                // $mediaresource->save();

                // $stone->thumbnail = $filename;
                // $stone->thumbnail_path = '/storage/stones/'.$stone_name;                
                // $stone->save();



                foreach ($files_samples as $file_sample) {

                        //echo "SAMPLE:: =======> " . basename($file_sample). "\n";
                
                        $filename = 'sample_'.uniqid().'.jpg';
                        $filename_thumb = 'sample_thumb_'.uniqid().'.jpg';

                        list($sort, $sample_title) = explode("_", mb_strtolower( basename($file_sample,'.jpg') ));

                        // $img = Image::make($srcImagePath.'/samples/'.basename($file_sample))->widen(800);
                        $img = Image::make($srcImagePath.'/samples/'.basename($file_sample))->resize(1200, 700 , function($constraint) {
                              //$constraint->aspectRatio();
                        });

                        $img->save($dstImagePath.'/'.$filename);  

                        $img_thumb = Image::make($srcImagePath.'/samples/'.basename($file_sample))->crop(640, 360);

                        // $img_thumb = Image::make($srcImagePath.'/samples/'.basename($file_sample))->resize(640, 360 , function($constraint) {
                        //      //$constraint->aspectRatio();
                        // });
                        $img_thumb->save($dstImagePath.'/'.$filename_thumb);  


                        if(!ctype_digit($sort))
                            $sample_title = mb_strtolower(str_replace('_', ' ',basename($file_sample,'.jpg'))); 

                        $mediaresource = new Mediaresource();
                        $mediaresource->stone_id= $stone->id;
                        $mediaresource->title = $sample_title;
                        $mediaresource->filename = $filename;
                        $mediaresource->filename_thumb = $filename_thumb;
                        $mediaresource->filepath = '/storage/stones/'.$stone_name;
                        $mediaresource->filetype_id = 1;
                        $mediaresource->filecategory_id = 5; //Próbki
                        
                        echo $sort;
                        if(ctype_digit($sort)) {
                            //echo "integer";
                            $mediaresource->sort = $sort; //Próbki
                        } else {
                            //echo "nieinteger";
                        }

                        
                        $mediaresource->save();

                                   
                }




            
            } else {

                echo "ERROR: " . $stone->title . "\n";
            
            }



        }

    }   
}
