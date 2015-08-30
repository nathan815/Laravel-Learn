@extends('layouts.master')

@section('title', 'Create Article')

@section('content')
  
  <h1>Write a New Article</h1>

  <hr />

  @if($errors->any())
  <div class="alert alert-danger">
    <p>The following errors have occurred:</p>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  {!! Form::open() !!}
    
    <div class="form-group">
      {!! Form::label('title', 'Title:') !!}
      {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('body', 'Body:') !!}
      {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('published_at', 'Publish On:') !!}
      {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
    </div>

    <input type="submit" value="Create Post" class="btn btn-primary" />

  {!! Form::close() !!}

@stop