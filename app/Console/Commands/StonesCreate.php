<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Exports\UsersExport;
use App\Imports\StonesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Category;


class StonesCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:StonesCreate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importuje kamienie do bazy';

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

        echo "string";

        Excel::import(new StonesImport, 'data.csv');
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
