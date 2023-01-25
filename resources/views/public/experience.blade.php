@extends('public.layout')

@section('title', 'Page Title')

@section('content')
<div class="row my-5">
    <h3>{{$experience->title}}</h3>
    <h6>{{$experience->category}}</h6>
    <p>{{$experience->description}}</p>

    <p>{{$experience->sumber}}</p>
    <p>{{$experience->penerangan}}</p>
    <p>{{$experience->lokasi}}</p>
    <p>{{$experience->email}}</p>
    <p>{{$experience->no_telefon}}</p>
    <p>{{$experience->laman_sesawang}}</p>

    {{-- <img src="/4.png" class="img-fluid" alt="..."> --}}
</div>

<div class="row my-5">
  
</div>
@endsection
