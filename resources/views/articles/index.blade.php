@extends('layouts.master')

@section('title', 'Articles')

@section('content')

<h1>
  Articles
  <a href="/articles/create" class="btn btn-default pull-right">New Article</a>
</h1>

<hr />

@foreach($articles as $article)
  <article>
    <h3>
      <a href="articles/{{ $article->id }}">{{ $article->title }}</a>
    </h3>
    <div class="body">{{ $article->body }}</div>
  </article>
@endforeach

@stop