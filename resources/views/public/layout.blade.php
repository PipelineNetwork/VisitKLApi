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

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">VisitKL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/about">About</a>
                    <a class="nav-link" href="/experiences">Things To Do</a>
                    <a class="nav-link" href="/products">Products & Services</a>
                    <a class="nav-link" href="/offers">Deals & Packages</a>
                    <a class="nav-link" href="/gallery">Gallery</a>
                    <a class="nav-link" href="/events">What's On</a>
                    <a class="nav-link" href="/eform">E-Form</a>
                    <a class="nav-link" href="/faqs">F.A.Q</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <h3>Quick Links</h3>
        <div class="row">
            <div class="col mx-5 my-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/JATA_NEGARA_MALAYSIA.png/640px-JATA_NEGARA_MALAYSIA.png" class="img-fluid" alt="..."></div>
            <div class="col mx-5 my-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/JATA_NEGARA_MALAYSIA.png/640px-JATA_NEGARA_MALAYSIA.png" class="img-fluid" alt="..."></div>
            <div class="col mx-5 my-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/JATA_NEGARA_MALAYSIA.png/640px-JATA_NEGARA_MALAYSIA.png" class="img-fluid" alt="..."></div>
            <div class="col mx-5 my-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/JATA_NEGARA_MALAYSIA.png/640px-JATA_NEGARA_MALAYSIA.png" class="img-fluid" alt="..."></div>
            <div class="col mx-5 my-5"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/JATA_NEGARA_MALAYSIA.png/640px-JATA_NEGARA_MALAYSIA.png" class="img-fluid" alt="..."></div>       
        </div>       
    </div>



    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Copy Right @ Tourism Unit DBKL <br/>
                Total Visitor: XXX <br/>
                Best Viewed In Internet Explorer<br/>
                <a href="/admin">Administrator</a><br/>

            </span>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
