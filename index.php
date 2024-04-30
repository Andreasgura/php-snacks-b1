<?php
//variables snack 1
$basketGames = [
    [
        "home team" => "Real Madrid",
        "visiting team" => "Barcelona",
        "home team score" => 77,
        "visiting team score" => 50
    ],
    [
        "home team" => "Milan",
        "visiting team" => "Napoli",
        "home team score" => 67,
        "visiting team score" => 60
    ],
    [
        "home team" => "Juventus",
        "visiting team" => "Inter",
        "home team score" => 80,
        "visiting team score" => 70
    ]
];

//variables snack 2
if(isset($name) && isset($email) && isset($age)) {
    $name = $_GET["name"];
    $email = $_GET["mail"];
    $age = $_GET["age"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->
</head>

<body>
    <section class="container">
        <h2>Risultati giornata 12</h2>
        <div>
            <?php
            foreach ($basketGames as $key => $value) {
                echo $value["home team"] . " - " . $value["visiting team"] . " || " . $value["home team score"] . " - " . $value["visiting team score"] . "<br>";
            }
            ?>
        </div>
    </section>

<div class="container mb-3 my-3 ">
        <form action="index.php" method="GET">
            <input type="text" class="form-control mb-3" name="name" id="name" >
            <input type="text" class="form-control mb-3" name="mail" id="mail" >
            <input type="text" class="form-control mb-3" name="age" id="age" >
            <input type="submit" value="Invia" class="btn btn-primary my-3 ">
        </form>
    </div>
</body>

</html>