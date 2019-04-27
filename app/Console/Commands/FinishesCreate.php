<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Imports\FinishesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Category;


class FinishesCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:FinishesCreate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '3. Importuje wykonczenia kamieni do bazy';

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
    public function handle()
    {
        //


        Excel::import(new FinishesImport, 'data_finishes.csv');
        //Excel::import(new UsersImport, 'users.xlsx');

        // Excel::load('data.csv')->each(function (Collection $csvLine) {

        //      // Stone::create([
        //      //     // 'title' => "{$csvLine->get('first_name')} {$csvLine->get('last_name')}",
        //      //     'title' => $csvLine->get('job'),
        //      // ]);

        //     dd($csvLine);

        // });

        //solo->children()->create(['title' => 'Pomnik 115/245/30']);

    }
}
