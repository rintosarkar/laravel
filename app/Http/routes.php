<?php


Route::bind('articles', function($id){
	return App\Article::whereId($id)->first();

});

// Route::bind('category', function($id){
// 	return \App\Category::whereId($id)->first();

// });

$router->resource('articles','ArticlesController');
$router->resource('category','CategoriesController');
Route::resource('subcategory','SubcategoryController');

