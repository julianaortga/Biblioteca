@extends('layouts.principal')

@section('content')

    <h2 class="text-center">¿QUÉ LIBRO BUSCAS?</h2>
        <blockquote>
          <h3 class="text-center">El objetivo de ésta página, es facilitar a los alumnos y maestros la búsqueda efectiva de los libros que se encuentran en la Biblioteca de la Institución. </h3>
        </blockquote>

  
  <div class="jumbotron">
      <div class="container">
          <a name="Buscar"></a>
              <h2 class="text-center"><font color="white">¿Qué desea buscar?</font></h2>
              <div class="col-sm-4">
              </div>
              
                <div class="col-sm-4">
                  <div  class="form-group">
                    <select  class="form-control" id="sel1">
                      <option>Autor</option>
                      <option>Libro</option>
                    </select>
                  </div>
                </div>
    </div>
  </div> 
     
     
    

    <a name="Filtro"></a>
    <h2 class="text-center"><font color="orange">Filtro de Búsqueda</font></h2>
      <div class="row">
          
            <div class="col-lg-6">
              
              <div class="form-group">
                <div class="col-md-6">
                <label for="inputName" >Nombre: </label>
              <input type="name" id="inputName" class="form-control" placeholder="Ingrese el Nombre del Autor o Libro" required="" autofocus="">
            
            </div>
            <div class="col-md-6">
                  <label for="inputCod" >Código: </label>
              <input type="id" id="inpuCod" class="form-control" placeholder="Ingrese el Código del Autor o Libro" required="" autofocus="">
              </div>  
          </div>  
    
          
        
        </div>

        <div class="col-lg-6">

          <div class="form-group">
                <div class="col-md-6">
                  
                <div class="form-group">
                    <label for="sel1">Seleccione un Grado</label>
                      <select class="form-control" id="sel1">
                        <option>0°</option>
                        <option>1°</option>
                        <option>2°</option>
                        <option>3°</option>
                        <option>4°</option>
                        <option>5°</option>
                      </select>
                 </div>
                </div>  
                <div class="col-md-6">  
                <div class="form-group">
                    <label for="sel1">Seleccione un Área</label>
                      <select class="form-control" id="sel1">
                        <option>Mátematicas</option>
                        <option>Fisica</option>
                        <option>Biología</option>
                        <option>Sociales</option>
                      </select>
                 </div> 
              </div>   

            
              </div>
        </div>

      </div>
      &ensp;
      <div class="text-center">
        <button class="btn btn-lg btn-warning " type="submit">BUSCAR</button>
      </div>
      <div class="form-group">
        {!! Form::submit('Consultar',['class'=>'btn btn-lg btn-primary'])!!}
      </div>

      &ensp;
      &ensp;
      
    <!--  <script>twemoji.parse('\u2764\uFE0F' );
      </script>
    -->



@stop