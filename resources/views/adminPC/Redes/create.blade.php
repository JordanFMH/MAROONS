@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Red Social</h2>

    <form action="/storeRed" method="POST" class="row g-3 needs-validation" >
        @csrf
        @method('POST')

        <div class="col-md-6 position-relative">
          <label for="title" class="form-label">Red Social</label>
          <input type="text" class="form-control" id="title" name="title"  required>
        </div>

        <div class="col-md-6 position-relative">
          <label for="icon" class="form-label">Icono</label>
          <input type="text" class="form-control" id="icon" name="icon" required>
        </div>

        <div class="col-md-12 position-relative">
            <label for="link" class="form-label">Enlace Red Social</label>
            <input type="text" class="form-control" id="link" name="link" required>
        </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
          <a class="btn btn-outline-primary" href="/Redes">Regresar</a>
        </div>
      </form>
</div>
@endsection