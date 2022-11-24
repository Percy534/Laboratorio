<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-Recetas</title>
    <!--bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section>
        <h1>Registro de Recetas</h1>
        <form>

            <p>Ingresa el nombre de tu Receta: <input type="text" name="nombre de la receta"></p>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Imagen de la receta</label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>

            tiempo de preparación

            <input type="datetime" name="min"></p>

            <p>
                tiempo de cocción

                <input type="datetime" name="min">
            </p>

            </p>tiempo total

            <input type="datetime" name="min"></p>

            <p>
                Numero de porciones


            </p><input type="number" name="porciones">

            <p>
                complejidad

                <select name="" id="">
                    <option value="Fácil">Fácil</option>
                    <option value="Medio">Medio</option>
                    <option value="Medio">Difícil</option>
                </select>
            </p>

            <p>
                categoría:
            </p>
            <select name="" id="">
                <option value="Desayuno">Desayuno</option>
                <option value="Almuerzo">Almuerzo</option>
                <option value="Sopas">Sopas</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Postres">Postres</option>
            </select>

            <p>
                Ocaciones:
            </p>
            <select name="" id="">
                <option value="Cumpleaños">Cumpleaños</option>
                <option value="Día del padre">Día del padre</option>
                <option value="Día de la madre">Día de la madre</option>
                <option value="Día del niño">Día del niño</option>
                <option value="Navidad">Navidad</option>
                <option value="Semana Santa">Semana Santa</option>
                <option value="Verano">Verano</option>
            </select>

            <p>
                Destacar Receta: <input type="radio" name="" id="">
            </p>

            <p>
                Cantidad de votos: <input type="number" name="votos">
            </p>
            <p>

                Descripcion de la receta:<br>

                <textarea name="descripcion"></textarea>

            </p>

            <p>
            <p>

                Lista de ingredientes:<br>

                <textarea name="ingredientes"></textarea>

            </p>
            </p>

            <p>

                Instrucciones para la preparación:<br>

                <textarea name="ingredientes"></textarea>

            </p>
            <p>
                Recetas relacionadas
            </p>
            <select name="" id="">
                <option value="Cumpleaños">lasaña</option>
                <option value="Día del padre">Avena</option>
                <option value="Día de la madre">salmon</option>
                <option value="Día del niño">pinto</option>
                <option value="Navidad">nachos</option>
                <option value="Semana Santa">ponche</option>
                <option value="Verano">tarta</option>
            </select>

            </p>

            <input type="submit" value="Enviar la información">

        </form>

        <div class="card-group mt-5">
            <div class="card">
                <a href="receta.php"><img src="../imgs/Recetas/Desayuno/blueberries-ga412acaf1_1920.jpg"
                        class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <div>Avena con arandanos</div>
                    <div class="d-flex ms-4">
                        <input type="submit" value="Aceptar">
                        <input type="submit" value="Rechazar">

                    </div>
                </div>
            </div>
            <div class="card">
                <a href="receta.php"><img src="../imgs/Recetas/Desayuno/waffles-gbfa9ce6a3_1920.jpg"
                        class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <div>wafles</div>
                    <div class="d-flex ms-4">
                        <input type="submit" value="Aceptar">
                        <input type="submit" value="Rechazar">

                    </div>
                </div>

            </div>
            <div class="card">
                <a href="receta.php"><img src="../imgs/Recetas/Bebidas/kiwi-coctail-gf68605e32_1920.jpg"
                        class="card-img-top" alt="...">
                </a>
                <div class="card-body">

                    </button>
                    <div class="card-title botones-verdes2">coctel de kiwi</div>
                    <div class="d-flex ms-4">
                        <input type="submit" value="Aceptar">
                        <input type="submit" value="Rechazar">

                    </div>
                    </button>
                </div>
            </div>

        </div>

    </section>
</body>

</html>