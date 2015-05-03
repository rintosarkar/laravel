<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller {

	public function index(SubCategory $subcategory){
        $subcategories = $subcategory->get();
        return view('subcategory.index',compact('subcategories'));
    }

    public function create(SubCategory $subcategory){
            $categories = [];
            foreach(Category::all() as $category):
            $categories[$category->id] = $category->name;
            endforeach;
            return view('subcategory.create',compact('categories'));
    }

    public function store(SubCategory $subcategory, Request $request){
        SubCategory::create($request->all());
        return redirect('subcategory');
    }
}
