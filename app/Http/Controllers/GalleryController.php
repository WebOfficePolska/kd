<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mediaresource;
use App\Stone;
use DB;


class GalleryController extends Controller
{
    

	public function index(){


		//$stones = Stone::with("mediaresources")->get();


		$stones = DB::table('stones')
		    ->join('mediaresources', 'stones.id', '=', 'mediaresources.stone_id')
		    ->whereIn('mediaresources.filecategory_id', [4])
		    // ->orderBy("stones.sort_collection", "ASC")
		    ->get();


		    // dd($stones);


		$images = Mediaresource::where("filecategory_id",4)->get();

		return  view("galeria.index", ["stones" => $stones]);
	}



}
