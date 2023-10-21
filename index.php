<!-- HTML document declaration -->
<!DOCTYPE html>

<!-- Start of HTML document with the 'en' (English) language attribute -->
<html lang="en">
    <head>
        <!-- Metadata section with character encoding specification -->
        <meta charset="UTF-8">

        <!-- Title of the webpage -->
        <title>Ejercicios Formularios</title>

        <!-- Link to an external stylesheet located in the './css' directory -->
        <link rel="stylesheet" href="./css/index.css">

        <!-- Link to Bootstrap CSS library hosted on a CDN with integrity and crossorigin attributes -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <!-- Start of the main content container with class 'contenedor' -->
        <div class="contenedor">
            <!-- Main content area with class 'main' -->
            <main class="main">
                <!-- Main heading with class 'main__h1' -->
                <h1 class="main__h1">Ejercicios UT3_4 - Formularios</h1>
                <h3 class="h3">Inserción de vivienda</h3>
                <div class="section">
                    <form class="formulario" method="POST" action="./pages/insertarVivienda.php">
                        <div class="div_select">
                            <div class="select">
                                <label>Tipo de vivienda:</label>
                                <select class="form-select vivienda" name="tipo_vivienda" aria-label="Default select example">
                                    <option value="adosado">Adosado</option>
                                    <option value="unifamiliar">Unifamiliar</option>
                                    <option value="piso">Piso</option>
                                </select>
                            </div>
                            
                            <div class="select">
                                <label>Zona:</label>
                                <select class="form-select zona" name="zona" aria-label="Default select example">
                                    <option value="centro">Centro</option>
                                    <option value="periferia">Periferia</option>
                                    <option value="pda">Prado del Arca</option>
                                </select>
                            </div>
                        </div>
                        <div class="direcc">
                            <label>Dirección:</label>
                        </div>
                        <input type="text" class="form-control direccion" aria-label="direccion" name="direccion" aria-describedby="addon-wrapping">
                        <div class="div_select">
                            <div class="select">
                                <label>Habitaciones:</label>
                                <input type="text" class="form-control" aria-label="habitaciones" name="habitaciones" aria-describedby="addon-wrapping">
                            </div>
                            <div class="select">
                                <label>Precio:</label>
                                <input type="text" class="form-control" aria-label="precio" name="precio" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <div class="div__check">
                            <label>Extras:</label><br>
                            <input class="form-check-input" name="garaje" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                              Garaje
                            </label>
                            <input class="form-check-input" name="trastero" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                              Trastero
                            </label>
                            <input class="form-check-input" name="piscina" type="checkbox" id="gridCheck3">
                            <label class="form-check-label" for="gridCheck3">
                              Piscina
                            </label> <br><br>
                        </di>
                        <label for="exampleFormControlTextarea1" class="label form-label">Observaciones</label>
                        <textarea class="form-control" name="textArea" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <input type="submit" name="enviar" value="Enviar" class="btn enviar btn-primary">
                    </form>
                </div>
                <!-- Author information paragraphs with class 'main__text' -->
                <p class="main__text"><strong>Nombre:</strong> Diego Rubio Serrano</p>
                <p class="main__text"><strong>Curso:</strong> 2º DAW - DWES</p>
                <p class="main__text"><strong>Fecha de hoy:</strong> <?php echo date('Y-m-d') ?></p>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>