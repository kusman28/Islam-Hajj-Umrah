<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Check Registration</title>

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
          font-family: 'Poppins', sans-serif;
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
          background-color: #fff3cd;
          color: #333;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="ion-chevron-left"></i>&nbsp;
                    Back
                </a>
            </div>
        </nav>

        <div class="container">
            <img 
            class="rounded mx-auto d-block"
            height="150px"
            src="template/img/logo1.png">
            <h4 class="text-center">Check your registration here.</h4>
            {{-- <hr class="mb-4"> --}}
            <form action="{{URL::to('/CheckRegistration')}}" method="POST" role="search">
                @csrf
                <div class="col-md-8 mx-auto d-block">
                    <div class="input-group">
                        <input type="number" class="form-control" name="q" placeholder="Search by Passport No." required>
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                            Search
                        </button>
                        </div>
                    </div>
                </div>
            </form>
            @if (isset($details))
                <p>Passport No.</p>
                <h3>{{$query}}</h3>
                <div class="card-body table-responsive p-0">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-sm-block">Email</th>
                            <th>Registration Status</th>
                            <th>Date of Registration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $merged)
                            <tr>
                                <td> {{$merged->fullname}} </td>
                                <td class="d-none d-sm-block"> {{$merged->email}} </td>
                                <td> <span class="badge {{$merged->status === 'Approved' ? 'badge-success' : 'badge-danger'}}">{{strtoupper($merged->status)}}</span> 
                                    {{-- <span class="badge {{count(auth()->user()->unreadNotifications) === 0 ? 'badge-success' : (count(auth()->user()->unreadNotifications) === !0 ?'badge-danger':'badge-danger'), 'badge badge-pill'}}">{{count(auth()->user()->unreadNotifications)}}</span> --}}
                                </td>
                                <td> {{$merged->created_at->format('d/m/y')}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        @elseif(isset($message))
            <h3 class="text-center mt-2"> {{$message}} </h3>
        @endif
    </div>
</body>
</html>
