<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registration Success</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="template/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        *{
            font-family: Poppins;
        }
        body::-webkit-scrollbar {
            width: 0.4em;
            }
        body::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            }
        
        body::-webkit-scrollbar-thumb {
            background-color: #52de97;
            outline: 1px solid slategrey;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="ion-chevron-left"></i>&nbsp;
                Go to Homepage
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <h3 class="alert-heading">Almost done!</h3>
            <p>Your Hajj registation is being processed, please wait 1-2 days for the confirmation. We will contact you at your email provided.</p>
            <hr>
            <p class="mb-0">Thank you.</p>
        </div>
    </div>
</body>
</html>