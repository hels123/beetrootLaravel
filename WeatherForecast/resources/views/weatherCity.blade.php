<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
</head>
<body>
<div class="weather">
    <h2>Погода в городе <?php echo $data->name; ?></h2>
    <p>Погода: <?php echo $data->main->temp_min; ?>°C</p>
    <p>Влажность: <?php echo $data->main->humidity; ?> %</p>
    <p>Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
</div>

</body>
</html>
