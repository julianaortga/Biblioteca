<!DOCTYPE html>  
<html lang="en">  
	<head>  
   		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="icon" href="../../favicon.ico">
   		<link rel="stylesheet" href="css/bootstrap.css">


    	<title>Biblioteca INSTECOR</title>
    	
   		<!--<script src="//twemoji.maxcdn.com/2/twemoji.min.js?2.2"></script>
    	<script src="js/bootstrap.min.js" type="text/javascript"></script>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  		<script type="js/jquery-1.11.1.min.js"></script>
   		<script type="js/bootsrap.js"></script>-->
	    
</head>  
<body>  
	

      		
	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Biblioteca</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li><a href="/">Inicio</a></li>
		      <li><a href="/búsqueda">Búsqueda</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		        <li><a href="/ingresarAdmin"><span class="glyphicon glyphicon-log-in"></span>Ingresar</a></li>
		    </ul>
		  </div>
	</nav>

	@yield('content')

   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         

</body>  
</html>