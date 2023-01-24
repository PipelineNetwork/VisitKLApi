@extends('admin.layout')
 
@section('title', 'Page Title')
 
@section('content')
<div class="row my-3">
    <div class="col">

        <form action="/admin/faqs" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 col-4">
                <label class="form-label">Question</label>
                <input type="text" name="question" class="form-control">
            </div>

            <div class="mb-3 col-4">
                <label class="form-label">Answer</label>
                <textarea class="form-control" name="answer" rows="3"></textarea>
            </div>

       

            <button class="btn btn-primary" type="submit">Create FAQ</button>

        </form>

    </div>
</div>

<div class="row my-3">
    <h3>List of Faq</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
            <tr>
                <td>{{$faq->question}}</td>
                <td>{{$faq->answer}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection