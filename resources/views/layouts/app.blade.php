<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
	<body>

        @yield('content')

		@include('layouts.footer')

		@include('cookieConsent::index')

	</body>


</html>
