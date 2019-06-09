<!DOCTYPE html>
<html lang="en" >

<head>
	@include('layouts.header')  
</head>

<body>
	@include('layouts.navbar')


<main class="main" role="main">
	<div class="wrapper cf">

		@include('layouts.breadcrumb')

		@include('sidebar')

		<section class="content">
			@yield('dynamic-content')
		</section>
	</div>
</main>


@include('layouts.footer')

</body>

</html>
