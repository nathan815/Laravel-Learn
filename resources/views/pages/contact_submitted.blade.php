@extends('layouts.master')

@section('title', 'Contact Submitted')
@section('content')

<h1>Submitted!</h1>
Name: {{$name}}
<br />
Email: {{$email}}
<br />
Message: {{$message}}

@stop