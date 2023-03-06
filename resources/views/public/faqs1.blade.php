@extends('public.layout')
 
@section('title', 'Page Title')
 
@section('content')

<div class="row">
    <div class="col">
        <img src="/faq.png" class="img-fluid" alt="...">
    </div>
</div>

<div class="row">
    <div class="col" style="text-align: center;">
        <h5>A list of commonly asked questions about Kuala Lumpur and places to Visit in Kuala Lumpur. </h5>
    </div>
</div>

<div class="accordion" id="accordionExample">
    

    @foreach($faqs as $faq)
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading{{$faq->id}}">
        <button class="accordion-button collapsed text-white" style="background: #005BAA;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
          {{$faq->question}}
        </button>
      </h2>
      <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faq->id}}" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            {{$faq->answer}}
        </div>
      </div>
    </div>
    @endforeach

  </div>
@endsection