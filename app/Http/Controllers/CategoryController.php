<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

	public function index()
	{
		$categories = Category::all();
		return view('categories.index',compact('categories'));
	}

    public function create()
    {
    	return view('categories.create');
    }
    public function store(Request $request)
    {
    	$category = new Category();
    	$category->name = $request->name;
    	$category->save();
    	return back();
    }

}
