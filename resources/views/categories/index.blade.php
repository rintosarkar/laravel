
@extends('master')
@section('content')
	<hr>
		{!! Html::link('category', 'Home')!!} |
		{!! Html::link('category/create', 'Create')!!} |
		{!! Html::link('subcategory', 'Go to Sub Category Page')!!}
	<hr>
	<h1>{{ "Your Categories"}}</h1>
	@foreach($categories as $cat)
        <li>
        	
        	{!! link_to_route('category.show', $cat->name, [$cat->id]) !!} 
        </li>
	@endforeach
@stop
