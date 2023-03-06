@extends('public.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-5">
    <h3>Products</h3>
    <img src="/6.png" class="img-fluid" alt="...">
</div>

<div class="row my-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>                
                <th scope="col">Description</th>        
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{ $product->link }}">Link</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>    
</div>

@endsection