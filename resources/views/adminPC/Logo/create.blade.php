@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Imagen Logo</h2>

    <form action="/storeLogo" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('POST')
      
        <div class="col-md-12 position-relative">
            <label for="logo" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="logo" name="logo"  required>
          </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
          <a class="btn btn-outline-primary" href="/Logo">Regresar</a>
        </div>
      </form>
</div>
   
@endsection