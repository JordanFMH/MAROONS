@extends('layouts.admin')

@section('content')
<div class="container">
    <hr class="featurette-divider">
    <h2 class="text-center">Actualizar Misión y Visión</h2>
    <form action="/updateMisVis/{{$MisVis->image}}" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      
      <input type="hidden" name="id" value="{{$MisVis->id}}">
        <div class="col-md-12 position-relative">
            <label for="name" class="form-label">Texto</label>
            <textarea  class="form-control" name="name" id="name">{{$MisVis->name}}</textarea>
        </div>

        <div class="col-md-12 position-relative">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="col-md-12">
            <figure class="figure">
                <img style="width:250px; height:250px;" src="{{asset('imagenMisVis/'.$MisVis->image)}}" class="figure-img img-fluid rounded" alt="...">
            </figure>
        </div>

        <div class="col-12">
          <button style="margin-bottom: 15px;" class="btn btn-outline-success" type="submit">Actualizar</button>
          <a style="margin-bottom: 15px;" class="btn btn-outline-primary" href="/MisVis">Regresar</a>
        </div>
      </form>
</div>
   
@endsection