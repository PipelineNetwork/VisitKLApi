@extends('public.layout')

@section('title', 'Page Title')

@section('content')

    <div class="row my-5">
        <form action="/" method="POST">
            @csrf

            <div class="mb-3 col-4">
                <input type="text" name="search" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Search</button>

        </form>
    </div>

    <div class="row my-5">
        <h3>Events</h3>
        <h6><a href="/events">View All</a></h6>

        <div class="card-group">
            <div class="card">
                <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #1</h5>
                    <p class="card-text">Event #1 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #2</h5>
                    <p class="card-text">Event #2 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row my-5">
        <h3>Things To Do</h3>
        <h6><a href="/experiences">View All</a></h6>
        <div class="card-group">
            <div class="card">
                <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #1</h5>
                    <p class="card-text">Event #1 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #2</h5>
                    <p class="card-text">Event #2 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <h3>History of Kuala Lumpur</h3>
        <div class="card-group">
            <div class="card">
                <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #1</h5>
                    <p class="card-text">Event #1 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #2</h5>
                    <p class="card-text">Event #2 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <h3>KL Gallery</h3>
        <div class="card-group">
            <div class="card">
                <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #1</h5>
                    <p class="card-text">Event #1 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #2</h5>
                    <p class="card-text">Event #2 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #1</h5>
                    <p class="card-text">Event #1 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #2</h5>
                    <p class="card-text">Event #2 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <h3>What's On</h3>
        <div class="card-group">
            <div class="card">
                <img src="https://colony.work/wp-content/uploads/2020/06/Colony-@-Star-Boulevard-6-1024x532.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #1</h5>
                    <p class="card-text">Event #1 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events6/banners/f234f6394da43cd1d181d1b83e30050463a7244d0f1c5a282189490a4a8d9f33-rimg-w960-h503-gmir.jpg?v=1674349661"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #2</h5>
                    <p class="card-text">Event #2 Description</p>
                </div>
            </div>
            <div class="card">
                <img src="https://cdn-az.allevents.in/events8/banners/84cb82932ff2db7c1184bc5a601fd22de870b974327d5bb6ced02ed5e00b7f64-rimg-w960-h502-gmir.jpg?v=1674349710"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Event #3</h5>
                    <p class="card-text">Event #3 Description</p>
                </div>
            </div>
        </div>
    </div>


    <script>
        lol();

        function lol() {
            fetch('https://www.instagram.com/explore/tags/visitkl/?__a=1')
                .then((response) => response.json())
                .then((data) => {
                    for (var i = 0; i < 6; i++) {
                        var $this = data.graphql.hashtag.edge_hashtag_to_media.edges[i].node;
                        $('#container').append('<img src="' + $this.thumbnail_resources[2].src + '">');
                        console.log($this.thumbnail_resources[2].src)
                    }
                });


            // function(data, status) {
            //     for (var i = 0; i < 6; i++) {
            //         var $this = data.graphql.hashtag.edge_hashtag_to_media.edges[i].node;
            //         $('#container').append('<img src="' + $this.thumbnail_resources[2].src + '">');
            //         console.log($this.thumbnail_resources[2].src)
            //     }
            // });
        }
    </script>
@endsection
