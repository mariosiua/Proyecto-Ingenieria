<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark default-color"> 
        <a class="navbar-brand" href="#"><strong>UNA</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Opinions</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons" id="redes">
                <li class="nav-item">
                    <a href="https://www.facebook.com/VDOCENCIAUNA/"><img src="imagenes/facebook.png" class="facebook-img-card" /></a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/vdocenciauna/"><img src="imagenes/instagram.png" class="instagram-img-card" /></a>
                </li>
                <li class="nav-item">
                    <a href="https://www.youtube.com/channel/UCUs96CKvsIuVdsdxGhWKfjA"><img src="imagenes/youtube.png" class="youtube-img-card" /></a>
                </li>
            </ul>
        </div>

        </nav>
    <div class="login-card">
        <img src="imagenes/persona.png" class="profile-img-card" />
        <p class="profile-name-card"> </p>
        <form class="form-signin" action="/verifica" method="post"><span class="reauth-email"></span>
            @csrf
            <input class="form-control" type="text" required placeholder="Nombre de usuario" autofocus id="InputUsuario" name="usuario" value="123"/>
            <input class="form-control" type="password" required placeholder="Contraseña" id="InputPassword" name="password" value="root"/>
            <div class="checkbox">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6" />Recordar nombre de usuario</div>
            </div>
            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Acceder</button>
        </form>
        <a href="#" class="forgot-password">¿Olvidó su nombre de usuario o contraseña?</a>
    </div>
    <script>
    function verifica(){
        $.ajax({type:"POST", url:"api/correos?direccionDestino="+direccion+"&asunto="+asu+"&cuerpo="+cuerpo, contentType:"application/json"})
              .then( (c)=>{seEnvioCorreo(c);},
              (error)=>{ alert(errorMessage(error.status));});
    }
    </script>
</body>
</html>

