<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 3px solid black;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
    $a = 0;
    $b = 0;

    echo "<table>
            <tr>
                <th>a</th>
                <th>b</th>
                <th>!a</th>
                <th>a || b</th>
                <th>a && b</th>
                <th>a xor b</th>
            </tr>";

    for ($i = 0; $i < 2; $i++) {
        if ($i == 1) {
            $a = 1;
        }

        for ($j = 0; $j < 2; $j++) {
            if ($j == 1) {
                $b = 1;
            }

            echo "<tr>
                    <td>".$a."</td>
                    <td>".$b."</td>
                    <td>".(!$a)."</td>
                    <td>".($a || $b)."</td>
                    <td>".($a && $b)."</td>
                    <td>".($a xor $b)."</td>
                </tr>";
        }
    }

    echo "</table>";
    ?>
    <?php
$matrix = array(
    array(true, false, 1, 0, -1, "1", null, "php"),
    array(true, "", "", "", "", "", "", ""),
    array(false, "", "", "", "", "", "", ""),
    array(1, "", "", "", "", "", "", ""),
    array(0, "", "", "", "", "", "", ""),
    array(-1, "", "", "", "", "", "", ""),
    array("1", "", "", "", "", "", "", ""),
    array(null, "", "", "", "", "", "", ""),
    array("php", "", "", "", "", "", "", "")
);


echo '<table>';
echo '<tr>';
echo '<th>Гибкое сравнение в PHP</th>';
foreach ($matrix[0] as $value) {
    echo '<th>' . $value . '</th>';
}
echo '</tr>';

for ($i = 1; $i < count($matrix); $i++) {
    echo '<tr>';
    echo '<th>' . $matrix[$i][0] . '</th>';
    foreach ($matrix[$i] as $value) {
        echo '<td>' . var_export($value == $matrix[$i][0], true) . '</td>';
    }
    echo '</tr>';
}

echo '</table>';

echo '<br>';
echo '<table>';
echo '<tr>';
echo '<th>Жёсткое сравнение в PHP</th>';
foreach ($matrix[0] as $value) {
    echo '<th>' . $value . '</th>';
}
echo '</tr>';

for ($i = 1; $i < count($matrix); $i++) {
    echo '<tr>';
    echo '<th>' . $matrix[$i][0] . '</th>';
    foreach ($matrix[$i] as $value) {
        echo '<td>' . var_export($value === $matrix[$i][0], true) . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
?>
</body>
</html>