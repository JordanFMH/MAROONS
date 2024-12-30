@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Geolocalización</h2>

    <form action="/storeGeo" method="POST" class="row g-3 needs-validation" >
        @csrf
        @method('POST')
        <div class="col-md-12 position-relative">
            <label for="link" class="form-label">Enlace de Geolocalización</label>
            <input type="text" class="form-control" id="link" name="link" required>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
          <a class="btn btn-outline-primary" href="/Geolocalizacion">Regresar</a>
        </div>
      </form>
</div>
@endsection