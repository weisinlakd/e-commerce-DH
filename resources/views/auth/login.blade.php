<?php  //var_dump($_COOKIE['noExiste']);?>
<!doctype html>
<html lang="en">
<head>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Manaos Libre</title>
  <link rel="shortcut icon" type="image/x-icon" href="../img/logosolo.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- Bootstrap core CSS -->
  <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  
  

  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">
  <link href="../css/common.css" rel="stylesheet"><!-- Necesario para barra de navegación y paleta de colores -->
  
  
</head>
<body class="text-center color-4">
  <form  action="{{ route('login') }}" class="form-signin" method="post">
    @csrf
    <a href="home.php"><img class="mb-4" src="../img/logosolo.png" alt="" width="72" height="72"></a>
    <h1 class="h3 mb-3 font-weight-normal">Manaos Libre</h1>
    <label for="email" class="sr-only">Email</label>
      <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autofocus value="{{ old('email') }}" >
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    <label for="password" class="sr-only">Contraseña</label>
      <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required >
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          <a href="{{ route('password.request') }}">Olvidé mi contraseña </a>
      @enderror
      
          
      <div class="checkbox mb-3">
      <label for="remember">
        <input name="remember"  type="checkbox" value="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
  </form>

  <!-- <form action="hola.php" method="post">
    <input type="email" name="email1" value="">
    <input type="submit" value="hola">
  </form> -->
</body>
</html>