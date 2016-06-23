<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Sistema de Control de Citas">
    <meta name="author" content="Byte Informatica y Sistemas">
    <link rel="icon" href=""> 

    <title>Control de Citas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">INGRESAR AL SISTEMA</h2>
        <label for="inputEmail" class="sr-only">Usuario o E-mail</label>
        <input name="username" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Contrasena</label>
        <input name="userpass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar mi cuenta
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
      </form>
    </div> <!-- /container -->
  </body>
</html>

<?php ///user 'root' pass 'root'
        /*** @autor = 'Luis Antonio Gutierrez Rodas' e-mail 'lgutierrezrodas@gmail.com'
        @company = 'Byte Informatica y Sistemas'  ***/
    session_start();
    include("includes/config.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username=addslashes($_POST['username']);
        $password=md5(addslashes($_POST['userpass']));
        ///
        $sql="SELECT userid FROM user_access WHERE username='$username' and userpass='$password'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);
        ///
        if($count == 1){
            $_SESSION['login_admin']=$username;
         header("location:http://localhost/home/");
        }
    }
?>