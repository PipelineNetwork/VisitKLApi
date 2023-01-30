<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="-">
    <title>-</title>



    <!-- Bootstrap core CSS -->
    <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">

    <meta name="theme-color" content="#7952b3">

</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #E51C21">
        <div class="container-fluid">
            <a class="navbar-brand" class="text-white" href="/">VisitKL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white" href="/admin">Dashboard</a>
                    <a class="nav-link text-white" href="/admin/experiences">Things To Do</a>
                    <a class="nav-link text-white" href="/admin/products">Products & Services</a>
                    <a class="nav-link text-white" href="/admin/offers">Deals & Packages</a>
                    <a class="nav-link text-white" href="/admin/gallery">Gallery</a>
                    <a class="nav-link text-white" href="/admin/events">What's On</a>
                    <a class="nav-link text-white" href="/admin/eform">E-Form</a>
                    <a class="nav-link text-white" href="/admin/faqs">F.A.Q</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
