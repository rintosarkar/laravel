@extends('master')

@section('content')
    <hr/>
        {!! Html::link('articles', 'Home')!!}
    <hr>
	<h1>{!! 'Writes your Article!' !!}</h1>

	{!! Form::open(array('route'=>'articles.store'))!!}
	
	    @include('articles.form')
	
	{!! Form::close()!!}
@stop