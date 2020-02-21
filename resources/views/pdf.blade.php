@extends('layouts.master')
<!DOCTYPE html>
<html>
<head>
	<title>{{$hajj->fullname}}</title>

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <style type="text/css">
    #certificate { 
        position: fixed; 
        max-width:100%; 
        max-height:100%;
    }
	.pdf-container{
		position: relative;
	}
	.header-wrapper{
		text-align: center;
		margin: 30px 0 45px 0;
	}
	.logo{
		width: 200px;
		display: block;
	}
	.address{
		margin: 0;
	}
	.footer-wrapper{
		position: absolute;
		bottom: 0;
		text-align: center;
	}
</style>
</head>
<body>
    <div id="certificate"><img style="margin-top: -45px;" src="template/img/certificate.jpg"></div>
    <p style="
    font-family: Arial;
    margin-top:300px; 
    margin-left:150px; 
    font-size: 24px; 
    float: left; 
    color: #000;">{{$hajj->fullname}}</p>
	<p style="font-size: 12px; float: right; color: #fff;">Appointment Date: {{$hajj->created_at->format('d/m/y')}}</p><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pdf-container">
					<div class="header-wrapper">
						{{-- <img class="logo" src="img/clinick-logo.png"> --}}
						<p class="address">Tumaga, Zamboanga City <br> 09363242353</p>
					</div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Patient Type</th>
								<th>Prescription</th>
								<th>Amount Charge</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{$hajj->fullname}}</td>
								<td>{{$hajj->address}}</td>
								<td>{{$hajj->email}}</td>
								<td>{{$hajj->address}} - {{$hajj->address}}</td>
							</tr>
						</tbody>
					</table>
					<div class="footer-wrapper">
						<p class="">Keep this document as a copy of your record.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>