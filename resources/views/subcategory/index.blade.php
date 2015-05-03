@extends('master')
@section('content')
	<hr>
		{!! Html::link('subcategory', 'Home')!!} |
		{!! Html::link('subcategory/create', 'Create')!!} |
		{!! Html::link('category', 'Go to Category Page')!!}
	<hr>
	<h1>{{ 'Your Sub-Categories'}}</h1>
    @foreach($subcategories as $scat)
        <li>{!! $scat->sub_cat_name!!}</li>
    @endforeach
@stop