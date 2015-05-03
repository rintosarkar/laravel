
@extends('master')

@section('content')
    <hr/>
        {!! Html::link('articles', 'Home')!!} |
        {!! Html::link('articles/'.$articles->id.'/edit', 'Edit')!!} |
        {!! Html::link('articles/create', 'Create')!!}
    <hr>
    <h1>{!! $articles->title !!}</h1>

    <article>{!! $articles->body !!}</article>
@stop
