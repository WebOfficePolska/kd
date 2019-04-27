<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function kolekcja(Request $request){


		$id = $request->route()->action['id'];

		$root = Category::root();

		$categories = $root->children()->get();

		$category = Category::find($id);

		$products = Product::where('category_id', $id)->with('category')->paginate(10);


		return View('kamienie.index', [
			'category' => $category,
			'categories' => $categories,
			'products' => $products
		]);

    }
    //
}
