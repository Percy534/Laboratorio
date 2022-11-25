<?php

  require 'db.php';

  $recipes = $database->select("tb_recipes","*",[
    'LIMIT' =>11
]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GastroLife</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="shortcut icon" type="image/x-icon" href="../imgs/GL.ico">
  <!--bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- flickity CSS only -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <!-- JavaScript 
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  </head>

<body>
  <section>
    <div class="d-flex justify-content-center mt-5 ">
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

        <div class="buscador ">
          <img src="../imgs/iconos/buscar.png" title="Buscar" width="30" height="30" alt="Buscar">
          <input class="botones-blancos text-center" type="text" placeholder="Escribe tu receta" size="" maxlength="20"
            name="buscar" id="buscar">
        </div>
      </header>
    </div>

    <!-- Flickity HTML init 

    <div class="carousel carousel-img mt-5" data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
      <img src="../imgs/Recetas/Almuerzo/sandwich-gfceab6bb2_1920.jpg" alt="salmon" />
      <img src="../imgs/Recetas/Almuerzo/pasta.jpg" alt="pasta" />
      <img src="../imgs/Recetas/Almuerzo/salmon.jpg" alt="salmon" />
      <img src="../imgs/Recetas/Almuerzo/pasta.jpg" alt="pasta" />
      <img src="../imgs/Recetas/Almuerzo/salmon.jpg" alt="salmon" />
      <img src="../imgs/Recetas/Almuerzo/pasta.jpg" alt="pasta" />
    </div>
-->


  <div id='carouselExampleIndicators' class='carousel slide mt-5' data-bs-ride='true'>
    <div class='carousel-indicators'>
      <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
      <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='1' aria-label='Slide 2'></button>
      <button type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide-to='2' aria-label='Slide 3'></button>
    </div>
    <div class='carousel-inner'>
      <div class='carousel-item active'>
        <img src='../imgs/Recetas/Bebidas/kiwi-coctail-gf68605e32_1920.jpg' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item'>
        <img src='../imgs/Recetas/Desayuno/waffles-gbfa9ce6a3_1920.jpg' class='d-block w-100' alt='...'>
      </div>
      <div class='carousel-item'>
        <img src='../imgs/Recetas/Entradas/nachos-5539014_1280.jpg' class='d-block w-100' alt='...'>
      </div>
    </div>
    <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='prev'>
      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
      <span class='visually-hidden'>Previous</span>
    </button>
    <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleIndicators' data-bs-slide='next'>
      <span class='carousel-control-next-icon' aria-hidden='true'></span>
      <span class='visually-hidden'>Next</span>
    </button>
  </div>
 

    <!-- top 10 recetas-->

    <h5 class="botones-verdes">Recetas mejor valoradas</h5>

    <?php
  foreach ($recipes as $recipe){
      
    echo'<div class="card-group mt-5">

    <div class="card">
        <a href="receta.php"><img src="./imgs/'.$recipe['recipe_image'].'" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <a href="#"><img src="../imgs/coronas/corona-oro.png" alt="bronce" width="30" height="30">
            <span class="badge text-bg-secondary">'.$recipe["recipe_likes"].'</span>
          </a>
          <div class="card-title botones-verdes2">'.$recipe["recipe_name"].'</div>
          <p class="card-text">'.$recipe["recipe_time"].'</p>
          <div class="card-title dificultad">'.$recipe["id_recipe_level"].'</div>
        </div>
      </div>
      
      <div class="card">
        <a href="receta.php"><img src="./imgs/'.$recipe['recipe_image'].'" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <a href="#"><img src="../imgs/coronas/corona-oro.png" alt="bronce" width="30" height="30">
            <span class="badge text-bg-secondary">'.$recipe["recipe_likes"].'</span>
          </a>
          <div class="card-title botones-verdes2">'.$recipe["recipe_name"].'</div>
          <p class="card-text">'.$recipe["recipe_time"].'</p>
          <div class="card-title dificultad">'.$recipe["id_recipe_level"].'</div>
        </div>
      </div>

      <div class="card">
        <a href="receta.php"><img src="./imgs/'.$recipe['recipe_image'].'" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <a href="#"><img src="../imgs/coronas/corona-oro.png" alt="bronce" width="30" height="30">
            <span class="badge text-bg-secondary">'.$recipe["recipe_likes"].'</span>
          </a>
          <div class="card-title botones-verdes2">'.$recipe["recipe_name"].'</div>
          <p class="card-text">'.$recipe["recipe_time"].'</p>
          <div class="card-title dificultad">'.$recipe["id_recipe_level"].'</div>
        </div>
      </div>

      <div class="card">
        <a href="receta.php"><img src="./imgs/'.$recipe['recipe_image'].'" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <a href="#"><img src="../imgs/coronas/corona-oro.png" alt="bronce" width="30" height="30">
            <span class="badge text-bg-secondary">'.$recipe["recipe_likes"].'</span>
          </a>
          <div class="card-title botones-verdes2">'.$recipe["recipe_name"].'</div>
          <p class="card-text">'.$recipe["recipe_time"].'</p>
          <div class="card-title dificultad">'.$recipe["id_recipe_level"].'</div>
        </div>
      </div>

      <div class="card">
        <a href="receta.php"><img src="./imgs/'.$recipe['recipe_image'].'" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <a href="#"><img src="../imgs/coronas/corona-oro.png" alt="bronce" width="30" height="30">
            <span class="badge text-bg-secondary">'.$recipe["recipe_likes"].'</span>
          </a>
          <div class="card-title botones-verdes2">'.$recipe["recipe_name"].'</div>
          <p class="card-text">'.$recipe["recipe_time"].'</p>
          <div class="card-title dificultad">'.$recipe["id_recipe_level"].'</div>
        </div>
      </div>';
  }
  ?>
    <!-- Para cada Ocacion -->
    <div>
    <h5 class="botones-verdes">Para cada ocación</h5>
    </div>

    <div class="card-group mt-5">
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Desayuno/blueberries-ga412acaf1_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <div class="card-title botones-verdes2">Todas las recetas</div>
        </div>
      </div>
      <div class="card">
        <a href="receta.html"><img src="../imgs/Recetas/Desayuno/waffles-gbfa9ce6a3_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <div class="card-title botones-verdes2">Cumpleaños</div>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Bebidas/kiwi-coctail-gf68605e32_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          </button>
          <div class="card-title botones-verdes2">Día del padre</div>
          </button>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Almuerzo/lasagna-gc5add5e7a_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          </button>
          <div class="card-title botones-verdes2">Día de la madre</div>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Desayuno/blueberries-ga412acaf1_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <div class="card-title botones-verdes2">Día del niño</div>
        </div>
      </div>

      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Desayuno/waffles-gbfa9ce6a3_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <div class="card-title botones-verdes2">Navidad</div>
        </div>
      </div>

    </div>

    </div>

    <!-- Categorias-->

    <h5 class="botones-verdes">Recetas de todo tipo</h5>

    <div class="card-group mt-5 mb-5">
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Desayuno/waffles-gbfa9ce6a3_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <div class="card-title botones-verdes2">Desayunos</div>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Almuerzo/food-g28e8c6a38_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">
          <div class="card-title botones-verdes2">Almuerzos</div>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img
            src="../imgs/Recetas/Sopas/bottom-view-star-soup-in-bowl-on-yellow-tablecloth-on-dark.jpg"
            class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          </button>
          <div class="card-title botones-verdes2">Sopas</div>
          </button>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Bebidas/cup-gec5aef72f_1920.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          </button>
          <div class="card-title botones-verdes2">Bebidas</div>
        </div>
      </div>
      <div class="card">
        <a href="receta.php"><img src="../imgs/Recetas/Postres/cake-g66f6e9aba_1920.jpg" class="card-img-top"
            alt="...">
        </a>
        <div class="card-body">

          <div class="card-title botones-verdes2">Postres</div>
        </div>
      </div>
    </div>

    <!-- footer -->

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

  </section>
</body>

</html>