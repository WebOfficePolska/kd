<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Collection;
use App\Stone;
use App\Stonetype;
use App\Mediaresource;
use App\Option;
use App\Finish;
use DB;
use PDF;
use QrCode;

class StoneController extends Controller
{
    


	/*
	Pobiera wszystkie kamienie i zwraza poprzez API
	*/
    public function all(){
        $stones = Stone::all();
        return response()->json($stones);        
    }



	/*
	Pobiera wszystkie kamienie i zwraza poprzez API
	*/
    public function finishes(Request $request){
		$id = $request->id;
   		$finishes = Finish::where('stone_id',$id)->get();

   		$c = [];


   		foreach ($finishes as $key1) {
   			
   			foreach ($key1->toArray() as $key => $value) {
   				
   				if ($value==1 && $key!="id" && $key!="stone_id") {

   					array_push($c, ["stone_type" => $key]);
   				}
   				//echo "k: " . $key . " v: " . $value . "<br>";

   			}


   		}


    // $filtered = $finishes->filter(function ($value, $key) {

     	//echo "eee: " . $finishes[0];
    //     //return $value = 1;
    // });

        return response()->json($c);
        // return response()->json(['finishes' => $finishes]);        
    }




	
	public function show(Request $request){

		$id = $request->id;

		//$collections = Collection::with('stones','stones.options')->orderBy('stones.sort_all')->get();
		$stone = Stone::with('options','collections')->find($id);
//dd($stone);
		$finishes = Finish::where('stone_id',$id)->get();
		$options = Option::where('stone_id',$id)->get();

		//$s = $finishes->filter(function ($item) { return $item = true; });

		//dd($s);

		//QrCode::format('png')->size(250)->generate('http://wop.pl', public_path('images/qrcode.png'));


		$stonetype = Stonetype::find($stone->stonetype_id);

		//$sliders = $stone->mediaresources->whereHas('mediaresources.filecategory_id',4);

		$mediaresources = DB::table('stones')
		    ->join('mediaresources', 'stones.id', '=', 'mediaresources.stone_id')
		    ->where('mediaresources.stone_id', [$id])
		    ->where('mediaresources.filecategory_id', 4)
		    ->get();

		$samples = Mediaresource::where([
			['stone_id','=',$id],
			['filecategory_id','=',5]
		])->get();


		//dd($stone->options);


		return View('stone.show',[
			'stone'=>$stone,
			'finishes'=>$finishes,
			'options'=>$options,
			'stonetype'=>$stonetype,
			'mediaresources'=>$mediaresources,
			'samples'=>$samples,
			'active' => $stone->collections[0]->id,
		]);
	}




	public function getpdf(Request $request){

		$id = $request->id;

		$stone = Stone::with('options','collections')->find($id);
		$stonetype = Stonetype::find($stone->stonetype_id);

		

	    $link = "http://kd.wop.pl/kamienie/".$id;

    	    $data = ['stone' => $stone, 'stonetype' => $stonetype, 'link'=>$link ];
    	    $pdf = PDF::loadView('/stone/kt_indywidualna', $data);
  
    	    return $pdf->download('karta indywidualna '.$stone->title.'.pdf');

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













}
