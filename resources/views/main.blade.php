<!DOCTYPE html>
<html lang="en">

<head>
	@include('_head', ['headTitle' => $headTitle])
</head>

<body>
	@yield('content')
        
	@include('_footer')

</body>