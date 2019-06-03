<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <title>Gym</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body id="page-top">
@section('sidebar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Siłownia</span>
            <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="pictures/gym.jpg" alt="">
      </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/plans">Plany</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/calendar">Kalendarz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/progress">Postępy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/links">Linki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/awards">Nagrody</a>
                </li>
            </ul>
        </div>
    </nav>
@show

<div class="container">
    <div id="app">
        @yield('content')
    </div>
</div>
    <script src="js/app.js"></script>
</body>
</html>
