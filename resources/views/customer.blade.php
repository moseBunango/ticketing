<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v3 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/lora-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/raleway-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body class="form-v3" >
<a class="dropdown-item" href="{{url('out')}}">Log out</a> 
	<div class="page-content">
		<div class="form-v3-content">
			<form class="form-detail" action="{{url('journey')}}" method="get" id="myform">
				<h2>Booking Tickets</h2>
				
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="full-name">FROM</label>
						<input type="text" name="from"  class="input-text" required>
					</div>
					<div class="form-row form-row-1">
						<label for="your-email">TO</label>
						<input type="text" name="to"  class="input-text" required>
					</div>
				</div>
				<div class="form-group form-group-1">
					<!-- <div class="form-row form-row-2">
						<label for="person">PERSON:</label>
						<input type="number"  class="input-text" name="person" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
					</div> -->
					<div class="form-row form-row-3">
						<label for="date">DATE:</label>
						<input type="text" name="date" class="date" id="date" placeholder="8/9/2018">
					</div>
				
				</div>
				
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="SEARCH">
				</div>
			</form>
			
		</div>
	</div>
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script type="text/javascript">
		$( "#date" ).datepicker({
	        dateFormat: "MM - DD - yy",
	        showOn: "both",
	        buttonText : '<i class="zmdi zmdi-calendar-alt"></i>',
	    });
	</script>
</body>
</html>
