<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hajj Registration</title>

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
            <h4 class="mb-4">Hajj Registration Form</h4>
            <hr class="mb-4">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Middle name</label>
                    <input type="text" class="form-control" id="validationTooltip02" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" required>
                  </div>
                  {{-- <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                    </div>
                  </div> --}}
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Gender</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip02">Birthday</label>
                    <input type="date" class="form-control" id="validationTooltip02" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Mobile No.</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">
                            <span class="fas fa-mobile"></span>
                        </span>
                      </div>
                      <input type="text" class="form-control" id="validationTooltipUsername" placeholder="09xxxxxxxxx" aria-describedby="validationTooltipUsernamePrepend" required>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">WhatsApp</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">
                            <span class="fab fa-whatsapp"></span>
                        </span>
                      </div>
                      <input type="email" class="form-control" id="validationTooltipUsername" placeholder="WhatsApp" aria-describedby="validationTooltipUsernamePrepend" required>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">
                            <span class="fas fa-envelope"></span>
                        </span>
                      </div>
                      <input type="email" class="form-control" id="validationTooltipUsername" placeholder="Enter Email" aria-describedby="validationTooltipUsernamePrepend" required>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Nationality</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Filipino</option>
                        <option>Saudi</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Address</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Philippine</option>
                        <option>Saudi Arabia</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip03">City</label>
                    <input type="text" class="form-control" id="validationTooltip03" placeholder="Enter City" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">Job Title</label>
                    <input type="text" class="form-control" id="validationTooltip04" placeholder="Enter Job" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip03">Company Name</label>
                    <input type="text" class="form-control" id="validationTooltip03" placeholder="Enter Company/Employer Name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationTooltip04">Company Contact</label>
                    <input type="text" class="form-control" id="validationTooltip04" placeholder="Enter Company/Employer Contact" required>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip01">Iqama No.</label>
                      <input type="text" class="form-control" id="validationTooltip01" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Expiration Date</label>
                      <input type="date" class="form-control" id="validationTooltip02" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Passport No.</label>
                      <input type="text" class="form-control" id="validationTooltip02" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationTooltip02">Expiration Date</label>
                      <input type="date" class="form-control" id="validationTooltip02" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip01">2x2 Picture</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Iqama Picture</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationTooltip02">Passport Picture</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    </div>
                </div>
                <hr>
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Note:</h4>
                    <p>Siguraduhing tama ang mga impormasyon na inilagay at high-quality ang imahe ng Iqama at Pasaporte upang malinaw at hindi malabo kapag inupload ang mga ito.</p>
                    <hr>
                    <p class="mb-0">Maraming salamat,</p>
                </div>
                <div class="mb-5">
                    <button class="col-md-4 btn btn-primary" type="submit">Submit Form</button>
                </div>
              </form>
        </div>
    </div>
</body>
</html>
