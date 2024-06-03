<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		@yield('title')
		{{-- <title>MoreXHub.Tech :: IT Support End Tech Services</title> --}}

		<meta name="description" content="MoreX Hub Tech Admin Template">
		<meta name="author" content="MOREXHUB.TECH, design by: morexhub.com">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- VENDOR & MAIN CSS -->
        @include('backends.include.styles')
	</head>
	<body class="theme-green">
		<!-- Page Loader -->
		@include('backends.include.preloader')
		<!-- Overlay For Sidebars -->
		<div id="wrapper">
            @guest
			@else
			<!-- Navbar Section (Header) -->
			@include('backends.include.header')
			
            <!-- sidebar Section (Sidebar) -->
            @include('backends.include.sidebar')
			@endguest
            
			<!-- Page Contents -->
			@yield('main_contents')
		</div>
		<!-- Javascript -->
        @include('backends.include.scripts')
		{{-- @include('backends.include.alert') --}}
		@yield('scripts')
		<script>
			@if(Session::has('messege'))
				var type="{{Session::get('alert-type','info')}}"
				switch(type){
					case 'info':
						toastr.info("{{ Session::get('messege') }}");
						break;
					case 'success':
						toastr.success("{{ Session::get('messege') }}");
						break;
					case 'warning':
					toastr.warning("{{ Session::get('messege') }}");
						break;
					case 'error':
						toastr.error("{{ Session::get('messege') }}");
						break;
				}
			@endif
		</script>
	   
		<script>
			$(document).on("click", "#delete", function(e){
				e.preventDefault();
				var link = $(this).attr("href");
				swal({
					title: "Are you sure?",
					text: "You will not be able to recover this imaginary file!",
					type: "warning",
					showCancelButton: true,
					confirmButtonClass: "btn-danger",
					confirmButtonText: "Yes, delete it!",
					cancelButtonText: "No, cancel!",
				},
				function(isConfirm) {
					if (isConfirm) {
					swal("Deleted!", "Your imaginary file has been deleted.", "success");
					window.location.href = link;
					} else {
					swal("Cancelled", "Your imaginary file is safe :)", "error");
					}
				});
			});
		</script>
	</body>
</html>