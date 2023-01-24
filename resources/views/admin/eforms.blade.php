@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-3">
    <h3>E-Form</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Venue</th>
                <th scope="col">Event Type</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eforms as $eform)
            <tr>
                <td>{{$eform->name}}</td>
                <td>{{$eform->venue}}</td>
                <td>{{$eform->event_type}}</td>
                <td>{{$eform->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection