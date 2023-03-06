@extends('admin.layout')

@section('title', 'Page Title')

@section('content')

    <div class="row my-3">
        <div class="col">

            <form action="/admin/gallery" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 col-4">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">Category</label>
                    <select class="form-select" name="category">
                        <option value="Culture & Festival" selected>Culture & Festival</option>
                        <option value="Landmark">Landmark</option>
                        <option value="Architecture">Architecture</option>
                        <option value="People">People</option>
                        <option value="Skyscrapers">Skyscrapers</option>
                    </select>  
                </div>

                <div class="mb-3 col-4">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>                

                <button class="btn btn-primary" type="submit">Create Gallery Item</button>

            </form>

        </div>
    </div>

    <div class="row my-3">
        <h3>Gallery Item</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
   
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->category}}</td>
                    <td><a href="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$item->image}}">Link</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
