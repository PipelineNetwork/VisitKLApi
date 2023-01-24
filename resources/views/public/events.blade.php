@extends('public.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-5">
    <h3>What's On</h3>
</div>

<div class="row my-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Event Type</th>        
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{$event->title}}</td>
                <td>{{$event->created_at}}</td>
                <td>{{$event->event_type}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection