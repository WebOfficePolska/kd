<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;



use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show(Request $request){


		$id = $request->id;

		$product = Product::findOrFail($id);

//dd($product);

		return View('product.show',[
			'product' => $product
		]);

    }

}
