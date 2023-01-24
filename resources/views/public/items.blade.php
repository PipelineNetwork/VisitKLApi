@extends('public.layout')

@section('title', 'Page Title')

@section('content')
    <div class="accordion my-5" id="accordionExample">


            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        Culture & Festival
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse"
                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <img src="/5.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>

            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Landmark
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <img src="/5.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        Architecture
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <img src="/5.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div> 
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        People
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse"
                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <img src="/5.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive">
                        Skyscrapers
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse"
                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <img src="/5.png" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>            

    </div>
@endsection
