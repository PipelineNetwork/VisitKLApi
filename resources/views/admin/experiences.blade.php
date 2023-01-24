@extends('admin.layout')

@section('title', 'Page Title')

@section('content')

    <div class="row my-3">
        <div class="col">

            <form action="/admin/experiences" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 col-4">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category">
                        <option value="accomodations" selected>Accomodations</option>
                    </select>                    
                </div>                

                <div class="mb-3 col-4">
                    <label class="form-label">Location</label>
                    <select class="form-select" name="location">
                        <option value="Bukit Bintang" selected>Bukit Bintang</option>
                    </select>    
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>                

                <button class="btn btn-primary" type="submit">Create "Things To Do"</button>

            </form>

        </div>
    </div>

    <div class="row my-3">
        <h3>List of Things To Do</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                <tr>
                    <td>{{$experience->title}}</td>
                    <td>{{$experience->location}}</td>
                    <td>{{$experience->image}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
