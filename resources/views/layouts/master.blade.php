<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>
</head>
<body>
    <header>
    	<h2>Blog Bandung Coding</h2>
    	<nav>
    		<a href="">Home</a>
    		<a href="">About</a>
    		<a href="">Contact</a>
    	</nav>
    </header>
    <br>
     @yield('content')



    <footer>
    	Bandung coding 2019
    </footer>
</body>
</html>