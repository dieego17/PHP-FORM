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
        <link rel="stylesheet" href="../css/index.css">

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
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Recopila los datos del formulario
                            $tipo_vivienda = $_POST["tipo_vivienda"];
                            $zona = $_POST["zona"];
                            $direccion = $_POST["direccion"];
                            $habitaciones = $_POST["habitaciones"];
                            $precio = $_POST["precio"];
                            $extras = [];

                            // Comprueba los extras seleccionados
                            if (isset($_POST["garaje"])) {
                                $extras[] = "Garaje";
                            }
                            if (isset($_POST["trastero"])) {
                                $extras[] = "Trastero";
                            }
                            if (isset($_POST["piscina"])) {
                                $extras[] = "Piscina";
                            }

                            $observaciones = $_POST["textArea"];

                            // Validación: Comprobar si el precio y el tipo de vivienda se han introducido
                            if (empty($tipo_vivienda) || empty($precio)) {
                                require '../pages/error.php';
                            } else {
                                // Aquí puedes realizar la lógica de almacenamiento en la base de datos o mostrar un resumen de los datos.
                                echo "Tipo de vivienda: $tipo_vivienda<br>";
                                echo "Zona: $zona<br>";
                                echo "Dirección: $direccion<br>";
                                echo "Habitaciones: $habitaciones<br>";
                                echo "Precio: $precio €<br>";
                                echo "Extras: " . implode(", ", $extras) . "<br>";
                                echo "Observaciones: $observaciones <br>";
                            }
                        } else {
                            echo "Acceso no autorizado.";
                        }
                    ?>
                    <a href="../index.php" class="btn enviar btn-primary" target="target">Volver al formulario</a>
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
