@extends('public.layout')
 
@section('title', 'Page Title')
 
@section('content')
<h3>FAQ</h3>
<div class="accordion" id="accordionExample">
    

    @foreach($faqs as $faq)
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading{{$faq->id}}">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
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