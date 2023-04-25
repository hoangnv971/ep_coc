<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CÔNG TY TNHH THƯƠNG MẠI ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG 886 – Chuyên phá dỡ, đào móng công trình nhà ở</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('/css/app.css')}}">		
		<link rel="stylesheet" href="{{asset('/css/styles.css')}}">	
			
	</head>
	<body>
        <div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 text-center-mob">
						<div class="logo"><a href="{{asset('/')}}"><img src="/images/logo.png" alt="logo" height="60" style="padding-top: 3px"></a></div>
							
					</div>
					<div class="col-sm-2 text-end text-center-mob">
						<div class="phone-no" style="padding-top: 15px;padding-bottom: 10px;"><a href="tel:0986855999" style="padding-bottom: 10px;"><i class="fa fa-phone"></i>0986855999</a></div>
					</div>
                    <div class="col-sm-1">
                        <nav class="navbar navbar-expand-md navbar-light bg-white">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
            
                            <div class="navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">
            
                                </ul>
            
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
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
						<li><b><u>CÔNG TY TNHH ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG</u></b></li>
						<br><li><b>Website:</b> <a href="https://cocbetongthanglong.vn/">https://cocbetongthanglong.vn</a></li>
						<br><li><b>Điện thoại:</b> <a href="https://xacthuc.cocbetongthanglong.vn/s.aspx?s=2982405502454#">0986855999</a></li>
						<br><li>© Copyright <a href="https://cocbetongthanglong.vn/" style="color:white;font-weight:bold">CỌC BÊ TÔNG THĂNG LONG - Xác thực điện tử 24/7</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</body></html>