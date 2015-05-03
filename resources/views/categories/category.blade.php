@extends('master')
@section('content')
    <h1>{!! 'Create your Categories' !!}</h1>
    {!! Form::open(['route'=>'category.store']) !!}
        <div class="form-group">
            {!! Form::label('category-name','Category Name :') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add',['class'=>'form-control btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
@stop