<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
// use App\SubCategory;
use Illuminate\Http\Request;


class CategoriesController extends Controller {
    private $category;
	public function __construct(Category $category){
//        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->category =$category;

    }

    public function index(Category $category){
        $categories = $this->category->get();
        return view('categories.index',compact('categories'));

    }

    public function create(){
        return view('categories.category');
    }

    public function store(Category $category, Request $request){
            $category->create($request->all());
            return redirect('category');
    }

    public function show(Category $category, $id=null){

        $cssClass = [null,'fa fa-laptop','fa fa-desktop','fa fa-cart-plus','fa fa-envelope'];
        $iconForCategory = [];
        // dd($cssClass[$id]);
        if($id < count($cssClass)){
        $iconForCategory = array_add($iconForCategory, $id, $cssClass[$id]);
        // dd($iconForCategory);
            }
            // dd($iconForCategory);
        $category = $category->whereId($id)->get()->first();
        // return $name;
        $subcategory = $category->find($id)->subcategory()->get();
        // return view('categories.show',['subcategory'=>$subcategory,'name'=>$name]);
        return view('categories.show',compact('subcategory','category','iconForCategory'));

    }


}
