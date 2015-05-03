@extends('master')

@section('header')
			
	<div class="gradient">
		<p class="category-title">{{ $category->name}} <span><i class="{{ $iconForCategory? $iconForCategory[$category->id]:'' }}"></i></span></p>
	</div>
@stop
@section('content')
	@foreach($subcategory as $scat)
		<li>{!! $scat->sub_cat_name !!}</li>
	@endforeach
@stop

