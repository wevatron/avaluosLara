@include('fracments.header')
@include('fracments.footer')


<!doctype html>
<html lang="en">
  <head>

    <style type="text/css">
     .material-icons.md-18 { font-size: 18px; }
#footer {
  width: 100%;
  height: 200px;
  background: #333;
  border-top: 2px solid #000;
  position: absolute;
  bottom: 0;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Valuación</title>
  </head>
  <body>
    @yield('header')
    
   
   <main>
    <viv class="row">
      <div class="container" style="margin-top: 3%">
        @include('flash::message')
          
        @yield('contenido')
      </div>
     
    </viv>
    
   </main>
@yield('footer')
    <!-- Optional JavaScript -->
  <script>
$('div.alert').delay(1000);

$(document).ready(function (argument) {
  // body...
  setTimeout("$('div.alert').delay(3000).remove('div.alert')",3000);
  
});

</script>






@yield('code')
  </body>

</html>