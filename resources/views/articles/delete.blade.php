@extends('layouts.master')

@section('title', 'Delete Article')

@section('content')
  
  <h1>Delete Article</h1>

  <hr />

  <p>Really delete this article?</p>

  <h3>{{$article->title}}</h3>
  <p><em>{{$article->body}}</em></p>

  {!! Form::open([ 
      'method'=>'DELETE', 
      'url' => '/articles/'.$article->id, 
      'style'=>'display: inline'
  ]) !!}
    <button type="submit" class="btn btn-danger">Yes, delete it</button> 
    <a href="/articles/{{$article->id}}" class="btn btn-default">Cancel</a> 
  {!! Form::close() !!}

@stop