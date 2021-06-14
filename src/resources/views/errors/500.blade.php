@extends('errors.base')
@section('title') Error 500! @endsection

@section('h1')
<i class="fas fa-sad"></i> Error 500! <br>
@endsection
@section('h2')
Se produjo un error interno de parte del servidor. <br>Su solicitud no se pudo completar.
@endsection
@section('texto')
Si el problema persiste, contacte al administrador del sistema.
@endsection