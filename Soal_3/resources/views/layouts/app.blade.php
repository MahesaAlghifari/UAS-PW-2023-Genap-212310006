<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakmie Joko</title>
    <!-- Include your CSS and JavaScript files -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Add your navigation, header, or other common elements -->
    @if (
        !in_array(request()->route()->getName(),
            ['article.index', 'menu.index','ulasan.index']))
        <header>
            @include('templates.header.navbar')
        </header>
    @else
        <header>
            @include('templates.header.navbarAdmin')
        </header>
    @endif

    <div>
        @yield('content')
    </div>


    @if (
        !in_array(request()->route()->getName(),
            ['article.index', 'menu.index','ulasan.index']))
        <header>
            @include('templates.footer.footer')
        </header>
    @else
        <header>
            @include('templates.footer.footerAdmin')
        </header>
    @endif


    <!-- Include your JavaScript files -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/script.js"></script>
</body>

</html>
