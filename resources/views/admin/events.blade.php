@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-3">
    <div class="col">

        <form action="/admin/events" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 col-4">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="mb-3 col-4">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control">
            </div>  

            <div class="mb-3 col-4">
                <label class="form-label">Tarikh</label>
                <input type="date" name="tarikh" class="form-control">
            </div>              
            
            <div class="mb-3 col-4">
                <label class="form-label">Image</label>
                <input type="file"  name="image" required/>
            </div>                      



            <div class="mb-3 col-4">
                <label class="form-label">Category</label>
                <select class="form-select" name="category">
                    <option value="Organiser" selected>Organiser</option>
                    <option value="KLCH">KLCH</option>
    
                </select>  
            </div>
              

            <button class="btn btn-primary" type="submit">Create Event</button>

        </form>

    </div>
</div>

<div class="row my-3">
    <h3>Event</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Category</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{$event->title}}</td>
                <td>{{$event->category}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection