<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Procesar Encuesta</title>
</head>

<body>
    <?php
    $preguntasAnime = [
        "1. ¿Qué tanto te gusta el género Shonen de acción?",
        "2. ¿Qué tan buenos consideras los animes de romance y drama?",
        "3. ¿Qué tanto disfrutas las historias de fantasía e Isekai?",
        "4. ¿Qué calificación le das a los openings y endings musicales?",
        "5. ¿Qué tanto te interesan las películas de anime en cine?",
        "6. ¿Qué tan satisfecho estás con los finales de las series actuales?",
        "7. ¿Qué tan importante es una buena animación para ti?",
        "8. ¿Qué tanto te gusta el desarrollo de los personajes principales?",
        "9. ¿Qué tan seguido prefieres ver anime en su idioma original con subtítulos?",
        "10. ¿Qué tan probable es que recomiendes un anime clásico a alguien?"
    ];

    if (isset($_POST['cargarFormulario']) && !isset($_POST['procesarDatos'])) {
        $numeroEncuestados = $_POST['numeroEncuestados'];
        echo '<form action="4_ejercicios.php" method="post">';

        $e = 1;
        while ($e <= $numeroEncuestados) {
            echo '<p style="font-size: 40px; color: blue;">Encuesta ' . $e . '</p>';
            echo '<p style="font-size: 25px; color: green;">Califica de 1 a 5:</p>';

            for ($i = 0; $i < 10; $i++) {
                echo $preguntasAnime[$i] . ' <input type="number" name="repuesta[' . $e . '][' . $i . ']" min="1" max="5" style="width: 40px;"><br><br>';
            }

            echo '<br>';
            $e++;
        }

        echo '<input type="hidden" name="numeroEncuestados" value="' . $numeroEncuestados . '">
              <input style="color: blue;" type="submit" value="Enviar" name="procesarDatos"></form>';
    } else if (isset($_POST['procesarDatos'])) {
        $numeroEncuestados = $_POST['numeroEncuestados'];
        $sumaTotal = 0;
        $totalPreguntas = $numeroEncuestados * 10;

        if (isset($_POST['repuesta'])) {
            foreach ($_POST['repuesta'] as $encuestado) {
                foreach ($encuestado as $valor) {
                    if ($valor !== '') {
                        $sumaTotal += $valor;
                    }
                }
            }
        }

        echo '<p style="font-size: 25px; color: green;">El promedio general de la encuesta de anime es: ' . ($sumaTotal / $totalPreguntas) . '</p>';
    } else {
        header('location: 4_ejercicios.html');
        exit();
    }
    ?>
</body>

</html>