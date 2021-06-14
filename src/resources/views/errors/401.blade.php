@extends('errors.base')
@section('title') Error 401! @endsection

@section('h1')
¡Error 401!
@endsection
@section('h2')
Acceso denegado, la solicitud no se ha aplicado porque carece de credenciales de autenticación válidas para el recurso de destino.   
@endsection
@section('texto')

@endsection

@section('boton')
<h2 class="text-center"><a class="btn btn-info my-2 my-sm-0" href="{{route('login')}}">Identificarse</a></h2>
@endsection