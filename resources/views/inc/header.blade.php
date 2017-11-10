<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Retratos de Identidad</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @include('inc/navbar')
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://www.facebook.com/retratosdeidentidad" target="_blank"><img src="{{ asset('img/facebook.svg') }}" alt=""></a></li>
        <li><a href="https://vimeo.com/user72581821" target="_blank"><img src="{{ asset('img/vimeo.svg?1.1') }}" alt=""></a></li>
        <li><a href="mailto:retratosdeidentidad@gmail.com"><img src="{{ asset('img/email.svg') }}" alt=""></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>