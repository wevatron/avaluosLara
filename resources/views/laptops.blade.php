@extends('fracments.main')



@section('contenido')



@endsection



@section('code')

<script type="text/javascript">

  
$(document).ready(function () {
  // body...

  $.get('/getMar',function (data) {
    // body...
    console.log(data);
  });
});
</script>

@endsection