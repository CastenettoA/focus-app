<!-- layout principale del sito web -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus - home page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>


<body>
    <!-- segnaposto -->
    @include('partials.header')
    @yield('content')
</body>

</html>