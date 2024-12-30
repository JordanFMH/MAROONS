@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Geolocalización</h2>

    <form action="/updateGeo" method="POST" class="row g-3 needs-validation" >
        @csrf
        @method('PUT')

        <input type="hidden" value="{{$Geo->id}}" name="id">
        
        <div class="col-md-12 position-relative">
            <label for="link" class="form-label">Enlace de Geolocalización</label>
            <textarea name="link" class="form-control" id="link">{{$Geo->link}}</textarea>
        </div>

        <div class="col-12">
          <button style="margin-bottom: 15px;" class="btn btn-outline-success" type="submit">Actualizar</button>
          <a style="margin-bottom: 15px;" class="btn btn-outline-primary" href="/Geolocalizacion">Regresar</a>
        </div>
      </form>
</div>
@endsection