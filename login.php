<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./estilos.css">
  <title>Streaming</title>
  <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
</head>
<body class="vh-100" style="border: 1px solid black;">
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card text-black border-custom">
            <div class="row g-0 rounded-5 caja-lg border-custom">
              <div class="col-lg-6 border-custom">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="img/logo.png" class="img-fluid my-4"
                      style="width: 250px; " alt="logo">
                  </div>
  
                  <form  action="./config/sesion.php" method="POST" class="m-auto" style="width: 90%">
                    <p class="text-center">Por favor, ingresa tus credenciales</p>
  
                    <div class="form-group has-feedback mb-4">
                      <i class="fa fa-user form-control-feedback"></i>
                      <input type="text" name="username" maxlength="8"  required class="form-control my-input" placeholder="Usuario">
                    </div>

                    <div class="form-outline has-feedback mb-4">
                      <i class="fa fa-lock form-control-feedback"></i>
                      <input type="password" name="password" required maxlength="8" class="form-control my-input" placeholder="Contraseña">

                    </div>
  

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-outline-primary btn-custom fa-lg mb-3"  type="submit" style="padding: 10px 0; width: 100%;">Ingresar</button>
                      
                    </div>
                  </form>
                  <p class="text-muted text-center">&copy; Mercal C.A 2025</p>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2 border-custom-img" style="
                background: url(./img/fondo.jpeg) rgba(0, 0, 0, .3);
                background-position: center;
                background-size: cover;
                background-blend-mode: overlay;
              ">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <form action="" method="POST">
                
<!-- <!-- <input pattern=".{3,}" required title="minimo 3 caracteres" maxlength="8">
<input type="submit" value="aceptar">
</form> -->
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>
</html>