<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // GET category
    public function index()
    {
        $category = Category::paginate(3);
        return view('category.index', compact('category'));
    }

    // GET category/1
    public function show($id)
    {
        $category = Category::where('id', $id)->get();
        $category = $category[0];
        // dd($category[0]);
        return view('category.show', compact('category'));
    }
}
