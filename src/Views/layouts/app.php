<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/trade/"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Union Parishad')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @include('layouts.header')
    @include('frontend.banner')

    <div class="container">

        <div class="row">
            @include('layouts.inc.left_sidebar')

            <main class="col-md-8 ms-sm-auto col-lg-8 px-md-4 content_bg ">
                @include('layouts.inc.navbar')
                @yield('content')
            </main>
            @include('layouts.inc.right_sidebar')
        </div>
    </div>

    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="assets/js/app.js"></script>


</body>

</html>
