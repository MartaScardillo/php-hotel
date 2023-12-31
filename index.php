<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form class="p-3" action="index.php" method="GET">
        <select class="form-select" name="filter">
            <option selected value="0">Nessun Filtro</option>
            <option value="1">Parcheggi</option>
        </select>
        <input type="submit" value="Filtra" name="submit">
    </form>
    <table class="table">
        <tr>
            <?php
            foreach ($hotels[0] as $key => $value) {
                echo "<th> $key </th>";
            }
            ?>
        </tr>

        <?php
        $parking = $_GET['filter'];

        foreach ($hotels as $hotel) {
            if ($parking == '0' || ($parking == '1' && $hotel['parking'])) {
                echo '<tr>';
                foreach ($hotel as $key => $value) {
                    echo "<td> $value </td>";
                }
                echo '</tr>';
            }

        }
        ?>

    </table>
</body>

</html>