<!DOCTYPE html>  
<html lang="en">  
	<head>  
   		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
      <meta name="description" content="">
      <meta name="author" content="">

    	<title>Biblioteca ADMIN</title>
    	
      {!!Html::style('../../favicon.ico')!!}
      {!!Html::style('../../dist/css/bootstrap.min.css')!!}
      {!!Html::style('../../assets/css/ie10-viewport-bug-workaround.css')!!}
      {!!Html::style('signin.css')!!}
      {!!Html::style('css/bootstrap.css')!!}
   		
      {!!Html::script('../../assets/js/ie-emulation-modes-warning.js')!!}
      {!!Html::script('//twemoji.maxcdn.com/2/twemoji.min.js?2.2')!!}
    


</head> 
<body>

    
      <div class="col-lg-9"></div>
    

    <div class="container">

        <div class="col-sm-4">
        </div>
          <div class="col-sm-4">
            <form class="form-signin">
              <h2 class="form-signin-heading">Por favor, Ingrese </h2>
              <label for="inputNameUser" class="sr-only">Nombre de Usuario</label>
              <input type="name" id="inputNameUser" class="form-control" placeholder="Nombre de Usuario" required="" autofocus="">
             
              <label for="inputPassword" class="sr-only">Contraseña</label>
              <input type="password" id="inputContraseña" class="form-control" placeholder="Contraseña" required="">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> ¿Recordar los datos?
                </label>
              </div>
              <div class="text-center">
               {!!link_to_route('admin.index', 'Ingresar', null, ['class'=>'btn btn-md btn-warning'])!!}
              <!--<button class="btn btn-lg btn-warning btn-block" type="submit">Ingresar</button> -->
             </div> 
            </form>
          </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  {!!Html::script('../../assets/js/ie10-viewport-bug-workaround.js')!!}

</body> 
