@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
    <p>This is my body content.</p>

    <form action="/admin/events" method="POST">
        @csrf

        <div class="row">
        

            <div class="mb-3 col-md-4">
                <label>Bilangan Kes</label><br>
                <input type="number" min="0" class="form-control" name="bil_kes_general" >
            </div>

    </form>
@endsection