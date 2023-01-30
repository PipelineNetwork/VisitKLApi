@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-3">
    <div class="col">

        <form action="/admin/faqs/{{$faq->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="mb-3 col-4">
                <label class="form-label">Question</label>
                <input type="text" name="question" class="form-control" value="{{$faq->question}}">
            </div>

            <div class="mb-3 col-4">
                <label class="form-label">Answer</label>
                <textarea class="form-control" name="answer" rows="3">{{$faq->answer}}</textarea>
            </div>

       

            <button class="btn btn-primary" type="submit">Update FAQ</button>

        </form>

    </div>
</div>


@endsection