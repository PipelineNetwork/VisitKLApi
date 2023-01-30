<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="-">
    <title>DBKL VisitKL</title>



    <!-- Bootstrap core CSS -->
    <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">

    <meta name="theme-color" content="#7952b3">

    @include('sweetalert::alert')

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/logo.png" width="120" height="100" alt="">
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    {{-- <a class="nav-link" href="/about">About</a> --}}
                    <a class="nav-link" href="/experiences"><b>Things To Do</b></a>
                    <a class="nav-link" href="/products"><b>Products & Services</b></a>
                    <a class="nav-link" href="/offers"><b>Deals & Packages</b></a>
                    <a class="nav-link" href="/gallery"><b>Gallery</b></a>
                    <a class="nav-link" href="/events"><b>What's On</b></a>
                    <a class="nav-link" href="/eform"><b>E-Form</b></a>
                    <a class="nav-link" href="/faqs"><b>F.A.Q</b></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <a href="https://www.dbkl.gov.my">
            <img src="/footer.png" class="img-fluid" alt="...">
        </a>
    </div>



    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span class="text-muted">Copy Right @ Tourism Unit DBKL <br />
                        <a href="/admin">Administrator</a><br />
                </div>
                <div class="col">
                    <span class="text-muted">Best Viewed In Internet Explorer<br />
                        Total Visitor: XXX <br />
                </div>
            </div>

            </span>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
