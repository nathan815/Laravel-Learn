@extends('layouts.master')

@section('title', $article->title)

@section('content')

<h1>
  {{ $article->title }}
  <div class="pull-right">
    <a href="/articles/create" class="btn btn-default">New Article</a>
    <a href="/articles/{{$article->id}}/delete" class="btn btn-danger">Delete</a> 
  </div>
  <br />
  <small>Published on {{ $published }}</small>
</h1>

<article>
  {{ $article->body }}
</article>

@stop