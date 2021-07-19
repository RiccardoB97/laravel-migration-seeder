<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home Page')</title>
    {{-- Link to CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Bootstrap cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header id="site_header">
        <div class="container">
            <nav>
                <h1>Travel Packages</h1>
            </nav>
        </div>
    </header>
    <main id="site_main">
        @yield('main_content')
    </main>
    <footer id="site_footer">

    </footer>
    
</body>
</html>