@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Sobre Nosotros</h2>
    <form action="/updateSobreNos/{{$SobreNos->imagen}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <input type="hidden" name="id" value="{{$SobreNos->id}}">

        <div class="col-md-12 position-relative">
            <label for="titulo" class="form-label">Título</label>
            <textarea  class="form-control" name="titulo" id="titulo">{{$SobreNos->titulo}}</textarea>
        </div>

        <div class="col-md-12 position-relative">
            <label for="texto" class="form-label">Texto</label>
            <textarea  class="form-control" name="texto" id="texto">{{$SobreNos->texto}}</textarea>
        </div>

        <div class="col-md-12 position-relative">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>

        <div class="col-md-12">
            <figure class="figure">
                <img style="width:250px; height:250px;" src="{{asset('imagenSobreNos/'.$SobreNos->imagen)}}" class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        <div class="col-12">
          <button style="margin-bottom: 15px;" class="btn btn-outline-success" type="submit">Actualizar</button>
          <a style="margin-bottom: 15px;" class="btn btn-outline-primary" href="/SobreNos">Regresar</a>
        </div>
      </form>
</div>
   
@endsection