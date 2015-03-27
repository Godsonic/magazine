<!DOCTYPE html>
<html>
<head>
    <title>pearlMagazine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/template.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container" id="topHeader">

   <nav class="topRight">
       <a href="">Home page</a>
        <a href="['url' => 'article'">Articles</a>
        <a href="">Contact</a>
        <a href="/auth/register">Register</a>
        <a href="/auth/login">Login</a>
        <a href="/auth/logout">Logout</a><br>
        
        
       @if(Auth::check())
       
       	Welcome back! {{ Auth::user()->name}}
       @endif
   </nav>

    <h2>pearlMagazine</h2>
    <p>Welcome to pearlMagazine. Your best place to be inform</p>

    <hr>
</div>

	<div class="container">
		
		@include('flash::message')
		
	</div>	
	<div class="container">
    @yield('content')
	</div>



<!-- application javascript files -->
<script src="http://code.jquery.com/jquery.js"></script>

<script src="/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>


<script>
	
	//$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	$('#flash-overlay-modal').modal();
	
</script>
</body>
</html>