<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    <title>CÔNG TY TNHH THƯƠNG MẠI ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG 886 – Chuyên phá dỡ, đào móng công trình nhà ở</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('/css/app.css')}}?v=1">		
		<link rel="stylesheet" href="{{asset('/css/styles.css')}}?v=1">	
        @stack('styles')
	</head>
	<body>
        <div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-center-mob">
						<div class="logo"><a href="{{asset('/')}}"><img src="/images/logo-512x512px.png" alt="logo" height="100" style="padding-top: 3px"></a></div>
					</div>
					<div class="col-sm-6 d-flex align-items-center justify-content-end text-end">
						<div class="phone-no" style="padding-top: 15px;padding-bottom: 10px;"><a href="tel:0968.846.686" style="padding-bottom: 10px;"><i class="fa fa-phone"></i>0968.846.686</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="our-philosophy-area">
			<div class="content">@yield('content')</div>
		</div>
		
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center social-icons text-center-tab">
						<ul> 
						<li><b><u>CÔNG TY TNHH THƯƠNG MẠI ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG 886</u></b></li>
						<br><li><b>Website:</b> <a href="https://thanglong886.vn/">https://thanglong886.vn/</a></li>
						<br><li><b>Điện thoại:</b> <a href="tel:0968.846.686">0968.846.686</a></li>
						<br><li>© Copyright <a href="https://thanglong886.vn/" style="color:white;font-weight:bold">CỌC BÊ TÔNG THĂNG LONG 886 - Xác thực điện tử 24/7</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</body></html>