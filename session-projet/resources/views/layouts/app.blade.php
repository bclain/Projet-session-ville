<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Projet ville</title>
  <link rel="icon" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="main.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>

<body>
  <div class="wrapper">
    <!-- HEADER -->
    <header>
      <div class="">
        <a id="logo" href="/"><img src="" alt="Logo Image"></a>
      </div>      
        <nav class="main-nav">                       
            <a href=""></a>              
        </nav>
      <nav class="sub-nav">
        <a href="#"><i class=""></i></a>
        <a href="#"><i class=""></i></a>
        <a href="/deconnexion" id="dec">Deconnexion</a>  
       
      </nav>      
    </header>
    @if(isset($errors)&& $errors->any())
                        <div class="alert alert-danger ">
                          @foreach($errors->all() as $error)
                          <p>{{$error}}</p>
                         
                          @endforeach
                        </div>
                      @endif
    <!--erreur -->
                      

    @yield('Mid') <!--nom de la section  -->

      <!-- LINKS -->
      <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        
      </div>
      <div class="sub-links">
        <ul>
          Normalement c'est les aspect legaux et tout 
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->


 <!-- FOOTER -->
 <footer>
      <p> Zakaria ,Jerome, Antoine, Inc.</p>
      <p> Projet ville </p>
    </footer>
  </div>
  <script src="js/pop.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>