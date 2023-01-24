@extends('public.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-5">
    <h3>Events</h3>
    <div class="card-group">
        <div class="card">
            <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>                    
            </div>
        </div>
        <div class="card">
            <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>                    
            </div>
        </div>
        <div class="card">
            <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>                    
            </div>
        </div>
    </div>
</div>
@endsection