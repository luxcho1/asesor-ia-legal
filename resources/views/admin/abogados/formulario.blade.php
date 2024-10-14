@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<div class="container text-center" style="padding-top: 5%; padding-bottom: 5%;" >

    <!-- Insertar Imagen -->
    <div class="row" style="padding-bottom: 5%">
        <div class="col">
            <div class="form-group">
                @if(isset($abogado->imagen))
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$abogado->imagen) }}" width="100" alt="">
                 @endif
            <input class="form-control" type="file" name="imagen" id="imagen">     
            </div>
        </div>
      </div>

      <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Rut</h3>
              <input class="form-control form-control-lg" type="text" name="rut_abogado" value="{{ isset($abogado->rut_abogado)?$abogado->rut_abogado:old('rut_abogado') }}" id="rut_abogado">        
          </div>
        </div>
      </div>

    

    <!-- Insertar Nombre  -->
    <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Nombre</h3>
              <input class="form-control form-control-lg" type="text" name="name" value="{{ isset($abogado->name)?$abogado->name:old('name') }}" id="name">        
          </div>
        </div>
      </div>


      <!-- Insertar Especialidad  -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
            <h3 style="text-align: start">Especialidad</h3>
            <select class="form-control form-control-lg" name="especialidad" id="especialidad">
              <option value="">Selecciona una especialidad</option>

              <option value="Civil" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Civil') ? 'selected' : '' }}>Civil</option>

              <option value="Economico" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Economico') ? 'selected' : '' }}>Economico</option>

              <option value="Familiar" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Familiar') ? 'selected' : '' }}>Familiar</option>

              <option value="Laboral" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Laboral') ? 'selected' : '' }}>Laboral</option>

              <option value="Penal" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Penal') ? 'selected' : '' }}>Penal</option>

              <option value="Tributaria" {{ (isset($abogado->especialidad) && $abogado->especialidad == 'Tributaria') ? 'selected' : '' }}>Tributaria</option>
          </select>
        </div>
        </div>
      </div>
      

      


      <!-- Insertar Email  -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col">
          <div class="form-group">
              <h3 style="text-align: start">Email</h3>
              <input class="form-control form-control-lg" type="text" name="email" value="{{ isset($abogado->email)?$abogado->email:old('email') }}" id="email">        
          </div>
        </div>
      </div>


      <!-- Insertar Telefono -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col-6">
          <div class="form-group">
              <h3 style="text-align: start">Telefono</h3>
              <input class="form-control form-control-lg" type="text" name="telefono" value="{{ isset($abogado->telefono)?$abogado->telefono:old('telefono') }}" id="telefono">        
          </div>
        </div>
        <div class="col-6">
        </div>
      </div>

      <!-- Insertar Sueldo  -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col-6">
          <div class="form-group">
              <h3 style="text-align: start">Sueldo</h3>
              <input class="form-control form-control-lg" type="text" name="sueldo" value="{{ isset($abogado->sueldo)?$abogado->sueldo:old('sueldo') }}" id="sueldo">        
          </div>
        </div>
        <div class="col-6">
        </div>
      </div>

      <!-- Insertar Biografia  -->
      <div class="row" style="padding-bottom: 5%">
        <div class="col">
            <div class="form-group">
                <label for="biografia">Biografía</label>
                <textarea class="form-control form-control-lg" id="biografia" name="biografia" rows="3" required>{{ isset($abogado->biografia) ? $abogado->biografia : old('biografia') }}</textarea>
            </div>
        </div>
      </div>



      <!-- Botones -->
      <div class="row">
        <input class="btn btn-success btn-lg" type="submit" value="{{ $modo }} Cliente" id="ingresar">
        <a class="btn btn-primary btn-lg" href="{{ url('/') }}" id="regresar" name="regresar">Regresar</a>
      </div>
  </div>