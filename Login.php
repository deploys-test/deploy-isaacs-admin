<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <link rel="shortcut icon" href="./img/logo.png">
    <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      background: url(img/Fondo_Proyecto.jpg) no-repeat center center fixed;-->
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .LoginBox{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 350px;
      height: 420px;
      padding: 80px 40px;
      box-sizing: border-box;
      background: rgba(0,0,0,.8);
    }
    .user{
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      position: absolute;
      top: calc(-100px/2);
      left: calc(50% - 50px);
    }
    h2{
      margin: 0;
      padding: 0 0 20px;
      color: white;
      text-align: center;
    }
    .LoginBox p{
      margin: 0;
      padding: 0;
      font-weight: bold;
      color: #fff;
    }
    .LoginBox input{
      width: 100%;
      margin-bottom: 20px;
    }
    .LoginBox input[type="text"],
    .LoginBox input[type="password"]{
      border: none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height: 40px;
      color: #fff;
      font-size: 16px;
    }
    ::placeholder{
      color: rgba(255, 255, 255, .5);
    }
    .LoginBox input[type="submit"]{
      border: none;
      outline: none;
      height: 40px;
      color: #fff;
      font-size: 16px;
      background: #4f79ab;
      cursor: pointer;
      border-radius: 20px;
    }
    .LoginBox input[type="submit"]:hover{
      background: white;
      color: #4f79ab;
    }
    .LoginBox a{
      color: #fff;
      font-size: 14px;
      font-weight: bold;
      text-decoration: none;
      text-align: center;
    }
    .button{
      background-color: rgb(58, 25, 228);
      color: white;
      padding: 7px;
      text-decoration: none;
      font-size: 20px;
      border-radius: 5px;
    }
    .button:hover{
      background-color:
      color: black;
      padding: 7px;
      text-decoration: none;
      font-size: 20px;
      border-radius: 5px;
    }
    </style>

  </head>
  <form class="InicioSesion" action="Login2.php" method="post">
    <body>
      <br>
      <div class="LoginBox">
        <h2>Iniciar Sesion</h2>
          <p>Usuario</p>
          <input type="text" name="nick" placeholder="Ingrese su usuario" value="">
          <p>Contraseña</p>
          <input type="password" name="password" placeholder="**********" value="">
          <input type="submit" name="Iniciar" value="Entrar">
          <input type="submit" name="Volver" value="Volver">
      </div>
    </body>
  </form>
</html>
