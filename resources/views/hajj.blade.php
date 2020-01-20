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
        <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>First name</label>
                    <input 
                    type="text" 
                    class="form-control @error('firstname') is-invalid @enderror" 
                    name="firstname"
                    value="{{ old('firstname') }}"
                    >
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Middle name</label>
                    <input type="text" 
                    class="form-control @error('middlename') is-invalid @enderror" 
                    name="middlename"
                    value="{{ old('middlename') }}"
                    >
                    @error('middlename')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Last name</label>
                    <input 
                    type="text" 
                    class="form-control @error('lastname') is-invalid @enderror" 
                    name="lastname" 
                    value="{{ old('lastname') }}"
                    >
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
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
                    <label>Gender</label>
                    <select class="form-control" name="gender" value="{{ old('gender') }}">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Birthday</label>
                    <input 
                    type="date" 
                    class="form-control @error('birthday') is-invalid @enderror" 
                    name="birthday"
                    value="{{ old('birthday') }}"
                    >
                    @error('birthday')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Mobile No.</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fas fa-mobile"></span>
                        </span>
                      </div>
                      <input 
                      type="text" 
                      class="form-control @error('mobile_no') is-invalid @enderror"
                       name="mobile_no" 
                       placeholder="09xxxxxxxxx" 
                       value="{{ old('mobile_no') }}"
                       >
                       @error('mobile_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label>Iqama No.</label>
                      <input 
                      type="text" 
                      class="form-control @error('iqama_no') is-invalid @enderror" 
                      name="iqama_no"
                      value="{{ old('iqama_no') }}"
                      >
                      @error('iqama_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input 
                      type="date" 
                      class="form-control @error('iqama_exp_date') is-invalid @enderror" 
                      name="iqama_exp_date"
                      value="{{ old('iqama_exp_date') }}"
                      >
                      @error('iqama_exp_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                      <label>Passport No.</label>
                      <input 
                      type="text" 
                      class="form-control @error('passport_no') is-invalid @enderror" 
                      name="passport_no"
                      value="{{ old('passport_no') }}"
                      >
                      @error('passport_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                      <label>Expiration Date</label>
                      <input type="date" 
                      class="form-control @error('passport_exp_date') is-invalid @enderror" 
                      name="passport_exp_date" 
                      value="{{ old('passport_exp_date') }}"
                      >
                      @error('passport_exp_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>WhatsApp</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fab fa-whatsapp"></span>
                        </span>
                      </div>
                      <input 
                      type="text" 
                      class="form-control @error('whatsapp_no') is-invalid @enderror" 
                      name="whatsapp_no" 
                      placeholder="WhatsApp" 
                      value="{{ old('whatsapp_no') }}"
                      >
                    @error('whatsapp_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Email</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </span>
                      </div>
                      <input 
                      type="email" 
                      class="form-control @error('email') is-invalid @enderror" 
                      name="email"
                      placeholder="Enter Email" 
                      value="{{ old('email') }}"
                      >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Nationality</label>
                    <select class="form-control @error('nationality') is-invalid @enderror" 
                    name="nationality" 
                    value="{{ old('nationality') }}">
                        <option value="Filipino">Filipino</option>
                        <option value="Saudi">Saudi</option>
                    </select>
                    @error('nationality')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Address</label>
                    <select class="form-control @error('address') is-invalid @enderror" 
                    name="address" 
                    value="{{ old('address') }}">
                        <option value="Philippines">Philippines</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                    </select>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>City</label>
                    <input 
                    type="text" 
                    class="form-control @error('city') is-invalid @enderror" 
                    name="city"
                    placeholder="Enter City"
                    value="{{ old('city') }}"
                    >
                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Job Title</label>
                    <input 
                    type="text" 
                    class="form-control @error('job') is-invalid @enderror" 
                    name="job"  
                    placeholder="Enter Job"
                    value="{{ old('job') }}"
                    >
                    @error('job')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label>Company Name</label>
                    <input 
                    type="text" 
                    class="form-control @error('company') is-invalid @enderror" 
                    name="company"  
                    placeholder="Enter Company/Employer Name" 
                    value="{{ old('company') }}"
                    >
                    @error('company')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Company Contact</label>
                    <input 
                    type="text" 
                    class="form-control @error('contact_company') is-invalid @enderror" 
                    name="contact_company"
                    placeholder="Enter Company/Employer Contact" 
                    value="{{ old('contact_company') }}"
                    >
                    @error('contact_company')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label>2x2 Picture</label>
                    <div class="custom-file">
                        <input 
                        type="file" 
                        onchange="readURL(this);"
                        class="custom-file-input @error('picture') is-invalid @enderror" 
                        name="picture"
                        value="{{ old('picture') }}"
                        >
                        @error('picture')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <img style="height: 250px;" class="img-thumbnail mt-4" id="blah" alt="2x2 Picture" />
                    </div>
                    <div class="col-md-4 mb-3">
                      <label>Iqama Picture</label>
                    <div class="custom-file">
                        <input 
                        type="file" 
                        onchange="readURL1(this);"
                        class="custom-file-input @error('iqama_pic') is-invalid @enderror" 
                        name="iqama_pic" 
                        value="{{ old('iqama_pic') }}"
                        >
                        @error('iqama_pic')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <img class="img-thumbnail mt-4" id="blah1" alt=" Iqama Picture" />
                    </div>
                    <div class="col-md-4 mb-3">
                      <label>Passport Picture</label>
                    <div class="custom-file">
                        <input 
                        type="file" 
                        onchange="readURL2(this);"
                        class="custom-file-input @error('passport_pic') is-invalid @enderror" 
                        name="passport_pic" 
                        value="{{ old('passport_pic') }}"
                        >
                        @error('passport_pic')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <img class="img-thumbnail mt-4" id="blah2" alt=" Passport Picture" />
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
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah1')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</html>
