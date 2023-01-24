@extends('public.layout')

@section('title', 'Page Title')

@section('content')
<div class="row my-5">
    <h3>Things To Do</h3>
    <img src="/4.png" class="img-fluid" alt="...">
</div>

<div class="row my-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Location</th>
                <th scope="col">Category</th>     
                <th scope="col">Description</th>        
            </tr>
        </thead>
        <tbody>
            @foreach ($experiences as $experience)
            <tr>
                <td><a href="/experiences/{{ $experience->id }}">{{$experience->title}}</a></td>
                <td>{{$experience->location}}</td>
                <td>{{$experience->category}}</td>
                <td>{{$experience->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection
