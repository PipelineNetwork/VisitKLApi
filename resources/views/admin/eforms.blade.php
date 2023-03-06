@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-3">
    <h3>E-Form</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Venue</th>
                <th scope="col">Event Type</th>
                <th scope="col">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eforms as $eform)
            <tr>
                <td><a href="/admin/eform/{{$eform->id}}">{{$eform->name}}</a></td>
                <td>{{$eform->eform_type}}</td>
                <td>{{$eform->venue}}</td>
                <td>{{$eform->event_type}}</td>
                <td>{{$eform->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection