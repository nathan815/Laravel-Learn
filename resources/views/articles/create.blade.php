@extends('layouts.master')

@section('title', 'Create Article')

@section('content')
  
  <h1>Write a New Article</h1>

  <hr />

  @include('errors.list')

  {!! Form::open(['url' => 'articles']) !!}
    
    @include('articles.form', ['submitButtonText' => 'Create Article'])

  {!! Form::close() !!}

@stop