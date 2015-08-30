@extends('layouts.master')

@section('title', 'Edit Article')

@section('content')
  
  <h1>Edit: {{$article->title}}</h1>

  <hr />

  @include('errors.list')

  {!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/'.$article->id]) !!}
    
    @include('articles.form', ['submitButtonText' => 'Update Article'])

  {!! Form::close() !!}

@stop