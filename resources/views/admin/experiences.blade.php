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
                        <option value="Accomodations" selected>Accomodations</option>
                        <option value="Food & Entertainment">Food & Entertainment</option>
                        <option value="Arts & Culture">Arts & Culture</option>
                        <option value="Places To Go">Places To Go</option>
                        <option value="Health & Wellness">Health & Wellness</option>
                        <option value="MICE">MICE</option>
                        <option value="Shopping">Shopping</option>
                        <option value="Sports">Sports</option>
                    </select>                    
                </div>                

                <div class="mb-3 col-4">
                    <label class="form-label">Location</label>
                    <select class="form-select" name="location">
                        <option value="Bukit Bintang" selected>Bukit Bintang</option>
                        <option value="Kepong" selected>Kepong</option>
                        <option value="Batu" selected>Batu</option>
                        <option value="Wangsa Maju" selected>Wangsa Maju</option>
                        <option value="Segambut" selected>Segambut</option>
                        <option value="Setiawangsa" selected>Setiawangsa</option>
                        <option value="Titiwangsa" selected>Titiwangsa</option>
                        <option value="Lembah Pantai" selected>Lembah Pantai</option>
                        <option value="Seputeh" selected>Seputeh</option>
                        <option value="Cheras" selected>Cheras</option>
                        <option value="Bandar Tun Razak" selected>Bandar Tun Razak</option>
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
                    <th scope="col">Category</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $experience)
                <tr>
                    <td>{{$experience->title}}</td>
                    <td>{{$experience->category}}</td>
                    <td>{{$experience->location}}</td>
                    <td>{{$experience->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
