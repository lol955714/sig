<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('js/jquery-2.2.4.js')}}" crossorigin="anonymous"></script>


<script src="{{asset('js/popper.min.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
<!-- notificaciones toast -->
<script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script>
<!-- config de toast-->
<script type="text/javascript" src="{{ asset('toastr/configtoast.js') }}"></script>

<!-- config de boton de subir-->
<script type="text/javascript" src="{{ asset('js/stand/boton-subir.js') }}"></script>
<!-- Tooltip-->
<script type="text/javascript" src="{{ asset('js/stand/tooltip.js') }}"></script>
<!-- configuraciones propias del equipo-->
<script type="text/javascript" src="{{ asset('js/propio.js') }}"></script>
@section('extrajsfooter')  @show
