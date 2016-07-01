<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sushi Delivery</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
		
                    
				

      <form class="form-signin" method='post' action='autenticar.php'>
	 
        <h2 class="form-signin-heading">Autenticar-se</h2>
        <label for="inputEmail" class="sr-only">Usuário:</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Digite seu usuário" name='usuario' required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Digite sua senha"  name='senha' required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="lembrar"> Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->

  </body>
</html>
