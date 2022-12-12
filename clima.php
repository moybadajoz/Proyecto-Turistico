<?php
$response = json_decode(file_get_contents("http://api.weatherapi.com/v1/forecast.json?key=1c578acddf924c9c90c150158221012&q=Guanajuato&days=3&aqi=no&alerts=no
"));
//echo var_dump($response);
$forecast = $response->forecast->forecastday;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_index.css">
    <link rel="preconect" href="https://fonts.googleapis.com">
    <link rel="preconect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce1ae3c06d.js" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container-card">
        <div class="card card-info">
            <figure>
                <?php foreach($forecast as $day){ ?>
                    <img class="clima-icon" src="<?php echo $day->day->condition->icon ?>" alt="">
                <?php } ?>
            </figure>
            <?php foreach($forecast as $day){ ?>
                <h2 class="clima-info"><?php echo $day->date ."<br>". $day->day->avgtemp_c."°C"?></h2> 
            <?php } ?>
        </div>
    </div>
</body>
</html>