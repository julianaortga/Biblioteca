@extends('layouts.principal')

@section('content')


<h1 >CONSULTA BASES</h1>

    
 <!--<div class="panel panel-warning">
    <div class="panel-heading">-->
          
    </div>
    <h2 class="text-center"><font color="orange" >RESULTADOS DE LIBROS</font></h2>
       <!-- <div class="panel-body"> -->
        {{ !! Form::open(['route'=>'ConsultaLibro.store','method'=> 'post'])!!}
    
      <div class="form-group">
        <p>
                  <label for="libro">CODIGO DEL LIBRO</label>
                  <select class="form-control" name="bases" id="bases">
                      @foreach($libro2 as $c)   
                      <option value={{ $c->cod_l }}>{{ $c->cod_l}}</option>
                    @endforeach
                  </select>
            </p>
      </div>
    
      <div class="form-group">
        {!! Form::submit('Consultar',['class'=>'btn btn-primary'])!!}
      </div>

      {!! Form::close() !!}
          <div class="form-group">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th><div class="text-center">Codigo</th></div>
                  <th><div class="text-center">Título</th></div>
                  <th><div class="text-center">Area</th></div>
                  <th><div class="text-center">Grado</th></div>
                </tr>
              </thead>
              <tbody>
                <tr>
                @foreach($libro as $l)
                  <td><div class="text-center">{{ $l->cod_l }}</td></div>
                  <td><div class="text-center">{{ $l->titulo }}</td></div>
                  <td><div class="text-center">{{ $l->area }}</td></div>
                  <td><div class="text-center">{{ $l->grado }}</td></div>
                </tr>
                @endforeach
              </tbody>
            </table>
           </div>
<!--</div>-->

@endsection

@stop