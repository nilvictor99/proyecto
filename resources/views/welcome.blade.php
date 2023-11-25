<!doctype html>
<html lang="en">

<head>
  <title>welcome</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-...." crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('assets/welcome.css')}}">

</head>

<body>
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 45%, 60%) 15%,
            hsl(218, 76%, 30%) 35%,
            hsl(219, 80%, 30%) 75%,
            hsl(218, 34%, 13%) 80%,
            transparent 100%);
      }

      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#77b800, #1fff8f);
        overflow: hidden;
      }

      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#00326b, #25deff);
        overflow: hidden;
      }

      #radius-shape-3 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        height: 200px;
        width: 210px;
        top: 300px;
        left: -300px;
        background: radial-gradient(#216da3, #27c24c, #1fff8f);
        overflow: hidden;
      }

      .bg-glass {
        background-color: #ffffffe6 !important;
        backdrop-filter: saturate(200%) blur(25px);
        border-radius: 20px
      }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Tiempo <br />
            <span style="color: hsl(218, 81%, 75%)">IA: Innovación</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                La inteligencia artificial (IA)
                es un campo informático que busca crear sistemas que imitan la inteligencia humana.
                Se aplica en áreas como asistentes virtuales y diagnósticos médicos, transformando la interacción con la tecnología.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
          <div id="radius-shape-3" class="position-absolute shadow-9-strong"></div>

          <div class="card bg-glass">

                <div class="welcome">
                    <div class="centro" id="centro">
                        <div class="log">
                            @if (Route::has('login'))
                                @auth
                                <a  href="{{ url('/home') }}">Home</a>
                                @else
                                <a class="logi" href="{{ route('login') }}">Log in</a>
                        </div>
                        <div class="reg">
                            @if (Route::has('register'))
                                <a class="regi" href="{{ route('register') }}">Register</a>
                                @endif
                                @endauth
                        </div>
                            @endif
                    </div>
                </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
