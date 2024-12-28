@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Ingresar Sobre Nosotros</h2>

    <form action="/storeSobreNos" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('POST')

        <div class="col-md-12 position-relative">
            <label for="titulo" class="form-label">Título</label>
            <textarea  class="form-control" name="titulo" id="titulo"></textarea>
        </div>
      
        <div class="col-md-12 position-relative">
            <label for="texto" class="form-label">Texto</label>
            <textarea  class="form-control" name="texto" id="texto"></textarea>
        </div>

        <div class="col-md-12 position-relative">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen"  required>
          </div>

        <div class="col-12">
          <button class="btn btn-outline-success" type="submit">Guardar</button>
          <a class="btn btn-outline-primary" href="/SobreNos">Regresar</a>
        </div>
      </form>
</div>
   
@endsection