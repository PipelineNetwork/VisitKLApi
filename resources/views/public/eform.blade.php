@extends('public.layout')

@section('title', 'Page Title')

@section('content')

    <h2 class="my-3">E-Form</h2>
    <form action="/eform" method="POST" enctype="multipart/form-data" class="my-5">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Venue</label>
                    <input type="text" name="venue" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="datetime-local" name="startdate">
                </div>

                <div class="mb-3">
                    <label class="form-label">End Date</label>
                    <input type="datetime-local" name="enddate">
                </div>


                <div class="mb-3">
                    <label class="form-label">Event Type</label>
                    <select class="form-select" name="event_type">
                        <option value="Events" selected>Events</option>
                        <option value="Gallery">Gallery</option>
                        <option value="Products & Services">Products & Services</option>
                        <option value="Deals & Packages">Deals & Packages</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label">Company</label>
                    <input type="text" name="company" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" name="link" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Fax</label>
                    <input type="text" name="fax" class="form-control">
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
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>


    </form>
@endsection
