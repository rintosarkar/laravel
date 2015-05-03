<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

	private $articles;

	public function __construct(Article $articles){
		$this->articles = $articles;
	}

	public function index(){
		$articles = $this->articles->get();
		return view('articles.index',compact('articles'));
	}

	public function store(Article $articles,Request $request){
		// return "hello";

		$articles->create($request->all());
		return redirect('articles');
	}

	public function create(){
		return view('articles.article');
	}

	public function show(Article $articles,$id){
		// dd($articles);
		// $articles = $this->articles->get();
		return view('articles.show',compact('articles'));
	}

	public function edit(Article $articles){
		return view('articles.edit', compact('articles'));
	}

	public function update(Article $articles, Request $request){
		$articles->fill($request->input())->save();
		if($articles){
			return redirect('articles');
		}
	}

	public function destroy(Article $articles){
        $articles->delete();
        return redirect('articles');
    }


}
