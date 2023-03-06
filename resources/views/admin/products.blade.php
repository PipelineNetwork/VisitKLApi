@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-5">
    <h3>Products</h3>
    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 col-4">
            <label class="form-label">Name</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Link</label>
            <input type="text" name="link" class="form-control">
        </div>   
        
        <div class="mb-3 col-4">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control">
        </div>            
        
        <div class="mb-3 col-4">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
        </div>          
        
        <div class="mb-3 col-4">
            <label class="form-label">Image</label>
            <input type="file"  name="image" required/>
        </div>             

        <button class="btn btn-primary" type="submit">Create Product</button>        
    </form>
</div>

<div class="row my-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>                
                <th scope="col">Description</th>        
                <th scope="col">Link</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{ $product->link }}">Link</a></td>
                <td>{{$product->location}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>
@endsection