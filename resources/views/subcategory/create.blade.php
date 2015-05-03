@extends('master')
@section('content')
    <h1>{!! 'Create your Subcategories' !!}</h1>

    {!! Form::open(['route'=>'subcategory.store']) !!}
    
    {!! Form::select('category_id', $categories, null,['class'=>'input-sm selectpicker']) !!}
    
    <div class="form-group">
        {!! Form::label('sub_cat_name','Sub-Category Name :')!!}
        {!! Form::text('sub_cat_name',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add',['class'=>'btn btn-success form-control'])!!}
    </div>
@stop