<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post-center</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-color-class fixed-top">
        <div class="container ">
            <a class="navbar-brand logo-navbar" href="/"><img
                    src="https://quickpostpk.com/uploads/settings/202410271347319460.webp" class="img-fluid w-100"
                    alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-content-main d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav pages-links-main mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><p class="nav-main-link">Home</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing"><p class="nav-main-link">Pricing</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/traking"><p class="nav-main-link">Traking</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"><p class="nav-main-link">About</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><p class="nav-main-link">Contact</p></a>
                    </li>
                </ul>
                
                <div class="d-flex gap-3 justify-content-center align-items-center sm-d-none">
                    <a class="nav-link" href="/contact"><p class="nav-main-link">Login</p></a>
                    <button class="btn btn-success">Register</button>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('script/script.js') }}"></script>
</body>

</html>
