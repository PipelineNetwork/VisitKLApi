@extends('public.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-5">
    <h3>Deals & Packages</h3>
    <img src="/7.png" class="img-fluid" alt="...">
</div>

<div class="row my-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>                
                <th scope="col">Description</th>        
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
            <tr>
                <td>{{$offer->title}}</td>
                <td>{{$offer->description}}</td>
                <td><a href="{{ $offer->link }}">Link</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection