<!doctype html>
<html lang="en">

<head>
  <title>login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-...." crossorigin="anonymous">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap">

    <link rel="stylesheet" href="{{asset ('assets/style.css')}}">

</head>

<body>
    <section class="h-100 gradient-form" style="background: linear-gradient(to bottom, #4D84EB, #7A4BEB, #4E52EB,#4DB6EB,#B14AF0);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                        <img src="{{asset ('img/fla.png')}}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1"><i class="fas fa-3x fa-dragon"></i>WELCOME</h4>
                      </div>

                      <form action="{{route('login')}}" method="post">
                        @csrf
                        <p>INICIAR SESION</p>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11"><i class="fas fa-envelope"></i>Correo</label>
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder="Correo" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22"><i class="fas fa-lock"></i>Contraseña</label>
                          <input type="password" name="password" id="form2Example22" class="form-control"
                          placeholder="contraseña"/>
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">ingresar</button>
                          <a class="text-muted" href="{{route('register')}}">olvidaste tu contraseña?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">no tienes cuenta?</p>
                          <a href="{{route('register')}}" class="btn btn-outline-success">registrarse</a>
                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <img src="{{asset ('img/flaw.png')}}"
                        style="width: 185px;" alt="logo">
                      <h4 class="mb-4">Welcome</h4>
                      <p class="small mb-0">La Inteligencia Artificial transforma, pero con
                        desafíos éticos. Colaboración humano-máquina y reflexión ética son clave para un futuro positivo.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
