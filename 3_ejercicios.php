<p style="font-size: 25px; color: blue;">Tabla del 4</p>
<table border="1" cellpadding="5" cellspacing="0">
    <?php
    $j = 1;
    while ($j <= 10) {
        echo "<tr><td>4 x $j</td><td>=</td><td>" . (4 * $j) . "</td></tr>";
        $j++;
    }
    ?>
</table>

<p style="font-size: 25px; color: green;">Variable de 2 en 2</p>
<table border="1" cellpadding="5" cellspacing="0">
    <?php
    for ($i = 1; $i <= 10; $i += 2) {
        echo "<tr><td>4 x $i</td><td>=</td><td>" . (4 * $i) . "</td></tr>";
    }
    ?>
</table>