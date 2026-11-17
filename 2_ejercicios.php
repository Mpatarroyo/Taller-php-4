<form action="" method="post">
    <label style="font-size: 40px; background: green;" for="numero">CALCULADORA DE NÚMEROS PRIMOS</label><br><br>
    <input type="number" name="numero" placeholder="Escriba el número" required>
    <input style="color:blue;" type="submit" value="Enviar" name="enviar">
</form>

<?php
if (isset($_POST['enviar'])) {
    $numero = $_POST['numero'];

    $divisores = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "<p><span style='font-size: 25px; color: green;'>El número $numero sí es primo.</span></p>";
    } else {
        echo "<p><span style='font-size: 25px; color: red;'>El número $numero no es primo.</span></p>";
    }

    $listaPrimos = "";
    for ($n = 1; $n <= $numero; $n++) {
        $d = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $d++;
            }
        }
        if ($d == 2) {
            $listaPrimos .= $n . ", ";
        }
    }

    echo "<p><span style='font-size: 25px; color: blue;'>Números primos desde 1 hasta $numero: $listaPrimos</span></p>";

    $invertido = "";
    for ($i = 0; isset($numero[$i]); $i++) {
    }
    for ($i = $i - 1; $i >= 0; $i--) {
        $invertido .= $numero[$i];
    }

    echo "<p><span style='font-size: 25px; color: purple;'>Número invertido: $invertido</span></p>";
}
?>