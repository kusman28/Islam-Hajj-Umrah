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
        .alert-custom{
          background-color: #d4edda;
          color: #333;
        }
        .alert a{
            color: #1d68a7;
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
        <div class="alert alert-custom" role="alert">
            <h3 class="alert-heading">Success!</h3>
            <p>Your Hajj registation is being processed, please wait 1-2 days for the approval or you can check your registration <a href="/CheckRegistration"> here.</a></p>
            <p class="mb-0">Thank you.</p>
            <hr>
            For more information please contact us.<br>
            <i class="ion-social-facebook"></i>&nbsp;Facebook
            <a target="_blank" rel="noreferrer" href="https://www.facebook.com/">IslamHajjUmrah</a><br>
            <i class="ion-social-whatsapp"></i>&nbsp;WhatsApp:
            <a target="_blank" rel="noreferrer" href="https://wa.me/00639368182985">00639368182985</a><br>
            <i class="ion-social-google"></i>&nbsp;Gmail:
            <a 
            target="_blank" rel="noreferrer"
            href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=islamhajjandumrah@gmail.com">islamhajjandumrah@gmail.com</a>
            
        </div>
    </div>
</body>
</html>