@extends('master')
@section('content')
    <hr/>
        {!! Html::link('articles', 'Home') !!} |
        {!! Html::link('articles/create', 'Create') !!} |
    <hr>
	@foreach($articles as $article)
		
		<li>
   	 		{!! link_to_route('articles.show', $article->title, [$article->id]) !!} 
   	 	</li>
	@endforeach
@stop