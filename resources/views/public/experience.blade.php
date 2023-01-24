@extends('public.layout')

@section('title', 'Page Title')

@section('content')
<div class="row my-5">
    <h3>{{$experience->title}}</h3>
    <h6>{{$experience->category}}</h6>
    <p>{{$experience->description}}</p>
    <img src="/4.png" class="img-fluid" alt="...">
</div>

<div class="row my-5">
  
</div>
@endsection
