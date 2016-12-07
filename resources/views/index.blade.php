@extends('layouts.principal')

@section('content')
<!--se corta desde aca-->

	<div class="row">
	 	<div class="col-lg-9">
	 		<div class="col-sm-4">
	 		<h4 class="text-center">Institución Certificada</h4>
				<img src="images/iso.png" align="center" alt="" class="img-rounded">
				<img src="images/cert.png" align="center" alt="" class="img-rounded">
	    		<img src="images/iqnett.png" align="center" alt="" class="img-rounded" width="80" height="80">
	    		&ensp;
	    		
	    	</div>	
	    	<h2 class="text-center">BIENVENIDOS A LA BIBLIOTECA</h2>
	    	<em><h4 class="text-center">Institución Educativa Cornejo</h4>
	    	<p class="text-center">Calidad y Excelencia</p></em>
			</div>
				<img src="images/cornejo.png" align="center" alt="" class="img-rounded">
		</div>

	</div>
	
	&ensp;
  			
		<!--	<script>twemoji.parse('\u2764\uFE0F' );
			</script>
		-->

</script>
 <div class="jumbotron">
  		<div class="container">
  			


          		<h2 class="text-center"><font color="white">Nuevos Libros</font></h2>
          		&ensp;
				&ensp;


					<div id="mycarousel" class="carousel slide" data-ride="carousel">

	  					<ol class="carousel-indicators">
	    					<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
	   						<li data-target="#mycarousel" data-slide-to="1" class></li>
	    					<li data-target="#mycarousel" data-slide-to="2" class></li>
	  					</ol>

						<div class="carousel-inner" role="listbox">
						 	<div class="item active">
							    <div align="center"><img src="images/e.jpg" alt="First slide" width="360" height="420"></div>
							    	
							</div>
						
							<div class="item">
						    	<div align="center"><img src="images/algebra.jpg" alt="Second slide" width="360" height="420"></div>
							</div>

							<div class="item">
							    <div align="center"><img src="images/matematicas.jpg" alt="Third slide" width="360" height="420""></div>
							</div>

						</div>
							<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
								<span class="icon-prev" aria-hidden="true"></span> 
							    <span class="sr-only">Previo</span>
							</a>
							<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
								<span class="icon-next" aria-hidden="true"></span> 
							    <span class="sr-only">Siguiente</span>
							</a>
					</div>
				
			
		</div>
   	
</div>

<!-- hasta aca-->

@stop