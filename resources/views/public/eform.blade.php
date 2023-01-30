@extends('public.layout')

@section('title', 'Page Title')

@section('content')

    <form action="/eform" method="POST" enctype="multipart/form-data" class="my-5">
        @csrf

        <div class="row">
            <div class="col-10"></div>
            <div class="col-2"><button class="btn btn-primary" style="background-color:#E51C21" type="submit">Submit</button></div>
        </div>

        <div class="row">
            <div class="col">
                <img src="/eform.png" class="img-fluid" alt="...">
            </div>

            <div class="col">
                <div class="row">

                    <div class="mb-3">
                        <label class="form-label">Event or Promotion Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Fill in here">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Start Date</label><br />
                        <input type="datetime-local" name="startdate">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Venue</label>
                        <input type="text" name="venue" class="form-control" placeholder="Fill in here">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">End Date</label><br />
                        <input type="datetime-local" name="enddate">
                    </div>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Event Type</label>
                        <select class="form-select" name="event_type">
                            <option value="Travel" selected>Travel</option>
                            <option value="Accomodations">Accomodations</option>
                            <option value="Food & Entertainment">Food & Entertainment</option>
                            <option value="Arts & Culture">Arts & Culture</option>
                            <option value="Places To Go">Places To Go</option>
                            <option value="Health & Wellness">Health & Wellness</option>
                            <option value="MICE">MICE</option>
                            <option value="Shopping">Shopping</option>
                            <option value="Sports">Sports</option>
                            <option value="Education">Education</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact No</label>
                        <input type="text" name="contact_no" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Company</label>
                        <input type="text" name="company" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fax</label>
                        <input type="text" name="fax" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Banners & Licenses</label>
                        <input class="form-control" type="file" name="photos[]" multiple>
                    </div>
                </div>
            </div>

        </div>




    </form>
@endsection
