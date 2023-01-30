@extends('admin.layout')

@section('title', 'Page Title')

@section('content')



        <div class="row">
            <div class="col">
                <img src="/eform.png" class="img-fluid" alt="...">
            </div>

            <div class="col">
                <div class="row">

                    <div class="mb-3">
                        <label class="form-label">Event or Promotion Name</label>
                        <input type="text" disabled name="name" class="form-control" value="{{$eform->name}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Start Date</label><br />
                        <input type="datetime-local" disabled name="startdate" value="{{$eform->startdate}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Venue</label>
                        <input type="text" disabled name="venue" class="form-control" value="{{$eform->venue}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">End Date</label><br />
                        <input type="datetime-local" disabled name="enddate" value="{{$eform->enddate}}">
                    </div>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" disabled name="description" rows="3">{{$eform->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Event Type</label>
                        <input type="text" disabled name="event_type" class="form-control" value="{{$eform->event_type}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" disabled name="link" value="{{$eform->link}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact No</label>
                        <input type="text" disabled name="contact_no" value="{{$eform->contact_no}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" disabled name="email" value="{{$eform->email}}" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Company</label>
                        <input type="text" disabled name="company" value="{{$eform->company}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fax</label>
                        <input type="text" disabled name="fax" value="{{$eform->fax}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Banners & Licenses</label> <br/>
                            @foreach ($images as $image)
                            <tr>
                                <td><img src="https://pipeline-apps.sgp1.digitaloceanspaces.com/{{$image->url}}" class="img-fluid" alt="..."></td>            
                            </tr>
                            @endforeach
            
                    </div>
                </div>
            </div>

        </div>


@endsection
