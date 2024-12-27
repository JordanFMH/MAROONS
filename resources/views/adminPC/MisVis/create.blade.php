@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Mision y Vision</h2>

    <form action="/storeMisVis" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('POST')
      
        <div class="col-md-12 position-relative">
            <label for="name" class="form-label">Nombre</label>
            <textarea  class="form-control" name="name" id="name"></textarea>
        </div>

        <div class="col-md-12 position-relative">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="image" name="image"  required>
          </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
        </div>
      </form>
</div>
   
@endsection