<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];

    echo "<h3> Soal 2</h3>";
    echo "Cast Stranger Things: <br><br>";

    echo "Total Kids: " . count($kids) . "<br>";
    echo "<ol>";
    foreach ($kids as $kid) {
        echo "<li>$kid</li>";
    }
    echo "</ol>";

    echo "Total Adults: " . count($adults) . "<br>";
    echo "<ol>";
    foreach ($adults as $adult) {
        echo "<li>$adult</li>";
    }
    echo "</ol>";

    echo "<h3>Soal 3</h3>";
    $cast = [
        [
            "Name" => "Will Byers",
            "Age" => 12,
            "Aliases" => "Will the Wise",
            "Status" => "Alive"
        ],
        [
            "Name" => "Mike Wheeler",
            "Age" => 12,
            "Aliases" => "Dungeon Master",
            "Status" => "Alive"
        ],
        [
            "Name" => "Jim Hopper",
            "Age" => 43,
            "Aliases" => "Chief Hopper",
            "Status" => "Deceased"
        ],
        [
            "Name" => "Eleven",
            "Age" => 12,
            "Aliases" => "El",
            "Status" => "Alive"
        ]
    ];

    echo "<pre>";
    print_r($cast);
    echo "</pre>";
    ?>
</body>
</html>
