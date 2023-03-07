@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
    <h1>Dashboard</h1>
    <p>Get as many infos as possible</p>


    <h1>Settings</h1>

    @foreach ($settings as $setting)
    <form action="/admin/settings/{{$setting->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3 col-4">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$setting->name}}" disabled>
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Datatype</label>
            <input type="text" name="datatype" class="form-control" value="{{$setting->datatype}}" disabled>
        </div>                

        <div class="mb-3 col-4">
            <label class="form-label">Value</label>
            <input type="text" name="value" class="form-control" value="{{$setting->value}}">
        </div>

   

        <button class="btn btn-primary" type="submit">Update setting</button>

    </form>
    @endforeach   
@endsection