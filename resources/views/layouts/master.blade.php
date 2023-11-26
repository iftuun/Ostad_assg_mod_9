
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- I need to add other styles and scripts here -->
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')

    <footer>
        <div class="social-links">
            <a href="https://github.com/iftuun" target="_blank">
            <img src="{{ asset('images/github.svg') }}" alt="GitHub Logo">
            </a>
            <a href="mailto:your-iftycse028@gmail.com" target="_blank">
            <img src="{{ asset('images/mailchimp.svg') }}" alt="Mail Logo">

            </a>
            <a href="https://www.facebook.com/profile.php?id=61550147903179" target="_blank">
            <img src="{{ asset('images/facebook.svg') }}" alt="Facebook Logo">
            </a>
        </div>
    </footer>

</body>
</html>
