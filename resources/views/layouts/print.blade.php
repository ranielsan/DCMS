<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
  <title>Voucher</title>

  <!-- Icons -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

  <!-- Main styles for this application -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- Styles required by this views -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">  
  <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">




<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/pace.min.js') }}"></script>
<script src="{{ asset('js/voucher.js')}}"></script>
</head>

<body class="bg-white">

    <div class="container">
    	<br/>
      	<div class="col-md-12">

               @yield('content')

      </div>

     </div>

</body>
<script>
	$(document).ready(function() {
		window.print();
	});
</script>
</html>