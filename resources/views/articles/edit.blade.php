@extends('master')

@section('content')
<hr/>
    {!! Html::link('articles', 'Home')!!} |
    {!! Html::link('articles/'.$articles->id.'/edit', 'Edit')!!} |
    {!! Html::link('articles/create', 'Create')!!}
<hr>
	<h1>{!! 'Writes your Article!' !!}</h1>

	{!! Form::model($articles, ['route'=>['articles.update', $articles->id], 'method'=>'PATCH'])!!}
	
		@include('articles.form')
	
	{!! Form::close()!!}
	{!! Form::open(['method'=>'DELETE', 'route'=>['articles.destroy',$articles->id]]) !!}
        <div class="form-group">
            <div class="col-sm-6">
                {!! Form::submit('Delete',['class'=>'form-control btn btn-danger'])!!}
            </div>
        </div>
    {!! Form::close()!!}


@stop
