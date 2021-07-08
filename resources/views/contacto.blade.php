@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Contacto
                </div>
<form action="{{route('contacto.store')}}" method="post" id="contactoform">
    @csrf 
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Texto</label>
      <input type="text" class="form-control" name="mensaje" id="exampleInputPassword1">
    </div>
    <button type="submit" onclick="document.getElementByid('contactoform').submit();" class="btn btn-primary">Submit</button>

</form>
     </div>
        </div>
        @endsection      
