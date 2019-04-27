<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Collection;
use App\Stone;
use App\Option;
use DB;

class CollectionController extends Controller
{
    
	
	public function index(Request $request){

		$id = $request->route()->action['id'];

		//$collections = Collection::with('stones','stones.options')->orderBy('stones.sort_all')->get();
		$stones = Stone::orderBy('sort_all')->get();
		
		//dd($collections);
		
		//dd($id);

		return View('stone.index',[
			'stones'=>$stones,
			'active' => $id,
		]);
	}






	public function kolekcje(Request $request){

		$id = $request->route()->action['id'];

		// $stones = Stone::whereHas('collections', function($q) use(3) {
  //   		$q->whereIn('id', 3);
		// })->get();
		

		// $collections = Collection::with('stones','stones.options')->whereIn('id',[$id, 4])->get();

		// $groups = $collections->sortBy('stones.tile');

		$stones = DB::table('stones')
		    ->join('collection_stone', 'stones.id', '=', 'collection_stone.stone_id')
		    ->whereIn('collection_stone.collection_id', [$id])
		    ->orderBy("stones.sort_collection", "ASC")
		    ->get();


		$stones_pozostale = DB::table('stones')
		    ->join('collection_stone', 'stones.id', '=', 'collection_stone.stone_id')
		    ->whereNotIn('collection_stone.collection_id', [$id])
		    ->orderBy("stones.sort_all", "ASC")
		    ->get();


		
		//dd($stones);
		
		//dd($id);

		return View('stone.kolekcja',[
			'stones'=>$stones,
			'stones_pozostale'=>$stones_pozostale,
			'active' => $id,
		]);
	}











	public function zapis_testowy(){

		$location = Location::find(1);
		//$location->collections()->attach([1, 2]);

		//dd($location->collections);


		// $options = new Option([
		// 	'top'=>true,
		// 	'floor'=>true,
		// 	'wall' 	=>true,
		// 	'upstairs'=>true,
		// 	'bathroom'=>true,
		// 	'fireplace'=>true,
		// 	'windowsill'=>true,
		// 	'outide'=>true,
		// 	'frost' =>true
		// ]);


		$stone = new Stone();
		$stone->title = "Granit";
		$stone->save();

		$options = new Option();
		$options->top = true;
		$options->floor= true;
		$options->wall = true;
		$options->upstairs = true;
		$options->bathroom = true;
		$options->fireplace = true;
		$options->windowsill = true;
		$options->outide = true;
		$options->frost = true;

		$stone->options()->save($options);


		foreach ($location->collections as $collection) {
		    
			echo "string: " . $collection->title;

		}

	}


}
