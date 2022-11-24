<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receta</title>

  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="shortcut icon" type="image/x-icon" href="../imgs/GL.ico">
  <!--bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!--flickity CSS only -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


  <link rel="stylesheet" href="estilos.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
  <title>Barra de Scroll Personalizada</title>
</head>

<body>

  <div class="d-flex justify-content-center mt-5">
    <header class="header d-flex justify-content-around align-items-center position-fixed">
      <div class="d-flex align-items-center">
        <a href="index.php"><img class="logo-size" src="../imgs\GL.png" title="GastroLife"
            alt="Logo GastroLife"></a>
        <a href="index.php" class="logo-txt title-m">GastroLife</a>
      </div>


      <div class="options">
        <a href="categorias.php" class="botones-blancos">categorias</a>
        <a href="ocaciones.php" class="botones-blancos">para cada ocacion</a>
        <a href="index.php" class="botones-blancos">Recetas más votadas</a>
      </div>

      <div class="buscador">
        <img src="../imgs/iconos/buscar.png" title="Buscar" width="30" height="30" alt="Buscar">
        <input class="botones-blancos text-center" type="text" placeholder="Escribe tu receta" size="" maxlength="20"
          name="buscar" id="buscar">
      </div>
    </header>
  </div>

  <div class="row-cols-3 recipe-body">

    <div class="col-md card-recipe ">
      <img class="recipe-img" src="../imgs/Recetas/Desayuno/blueberries-ga412acaf1_1920.jpg">
      <div>
        <a href="#"><img src="../imgs/coronas/corona-oro.png" alt="bronce" width="30" height="30">
          <span class="badge text-bg-secondary">100</span>
          <!--Arreglar esto para que el numero quede a la derecha de la corona-->
        </a>
        <!--<div class="card-title botones-verdes2">Avena con arandanos</div>-->
      </div>
    </div>

    <div class="col-md recipe-text ">
      <div class="contenedor">
        <h1>Avena con arandanos</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti consectetur minus deleniti culpa ducimus
          alias blanditiis, suscipit eligendi vel quam magni ad quasi iure? Nulla dolorum repellat atque laboriosam.
          Vel?</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sequi provident expedita esse, nostrum
          corporis reiciendis, vel odio laboriosam dolorum distinctio totam, soluta delectus dolores vero. Eum libero
          laborum sunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sequi provident expedita
          esse, nostrum corporis reiciendis, vel odio laboriosam dolorum distinctio totam, soluta delectus dolores vero.
          Eum libero laborum sunt.</p>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sequi provident expedita esse, nostrum
          corporis reiciendis, vel odio laboriosam dolorum distinctio totam, soluta delectus dolores vero. Eum libero
          laborum sunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti sequi provident expedita
          esse, nostrum corporis reiciendis, vel odio laboriosam dolorum distinctio totam, soluta delectus dolores vero.
          Eum libero laborum sunt.</p>
      </div>

      <div class="d-flex ms-4">
        <a href="categorias.php" class="botones-verdes4">Desayunos</a>
        <a href="#" class="botones-verdes4">Natural</a>
        <a href="ocaciones.html" class="botones-verdes4">Cumpleaños</a>
        <a href="#" class="botones-verdes4">Mañana</a>

      </div>
    </div>
  </div>

  <a href="index.php" class="logo"></a>
  <center> <img src="../imgs\GL.png" title="GastroLife" width="90" height="90" alt="Logo GastroLife">
  </center>
  <br>
  <center>
    <img src="../imgs/iconos/face.png" title="Facebook" alt="Facebook" width="35px" />
    <img src="../imgs/iconos/instagram.png" title="Instagram" alt="instagram" width="35px" />
    <img src="../imgs/iconos/youtube.png" title="Youtube" alt="youtube" width="35px" />
    <img src="../imgs/iconos/tiktok.png" title="TikTok" alt="tiktok" width="35px" />
  </center>
  <br>

  <h6 class="copyright">2022, GastroLife. Marca Registrada por O&P, S.A. Esparza (Costa Rica)</h6>
</body>

</html>