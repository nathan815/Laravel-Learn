@extends('layouts.master')

@section('title', 'Contact')
@section('content')

<h1>Contact</h1>
<hr />
<form method="post">

  {!! csrf_field() !!}

  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" />
  </div> 

  <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" />
  </div> 

  <div class="form-group">
    <label>Message:</label>
    <textarea rows="5" name="message" class="form-control"></textarea>
  </div> 

  <input type="submit" value="Send Message" class="btn btn-primary" />

</form>

@stop