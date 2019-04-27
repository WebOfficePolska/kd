<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Location;
use App\Collection;
use App\Stonetype;
use App\Filetype;
use App\Filecategory;

class InitCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:InitCreate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dodaje lokalizacje, kolekcie, typy kamieni';

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

        $location = Location::insert([
            ['title' => 'Centrum M4',
            'address' => 'Szwajcarska',
            'city' => 'Poznań',
            'code' => '55-300'],
            ['title' => 'Centrum Gdansk',
            'address' => 'Szwajcarska',
            'city' => 'Gdansk',
            'code' => '55-300']
        ]);



        $filetype = Filetype::insert([
            ['title' => 'Obraz'],
            ['title' => 'Film'],
            ['title' => 'Dokument'],
        ]);


        $filecategory = Filecategory::insert([
            ['title' => 'Katalog'],
            ['title' => 'Dokumentacja techniczna'],
            ['title' => 'Obraz reprezentujący'],
            ['title' => 'Slider'],
            ['title' => 'Próbki'],
        ]);


        $collections = Collection::insert([
            ['title' => 'SB'],
            ['title' => 'WOC'],
            ['title' => 'BB'],
            ['title' => 'Pozostałe'],

            // ['title' => 'Solo Bianco'],
            // ['title' => 'WOC'],
            // ['title' => 'BezeBrazy'],
            // ['title' => 'Pozostałe'],
        ]);


    	// $category->products()->createMany([
     //    	['title' => 'G623 Monte pink', 'desc' => '5/6'],
     //    	['title' => 'Skalisty', 'desc' => '5/6' ],
     //    	['title' => 'Regal black', 'desc' => '2/3/5/6' ],
     //    	['title' => 'Impala RPA', 'desc' => '5/6' ],
     //    	['title' => 'Shanxi Black', 'desc' => '2' ],
    	// ]);

    }   
}
