<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
</head>

<body>
    <?php
        $anosExpDev = 9;
        $cargo = match ($anosExpDev) {
            4, 5, 6 => "pleno",
            1, 2, 3 => "júnior",
            default => "senior"
        };

        echo $cargo;
    ?>

    <br>
    <h2>Outra abordagem com match</h2>
    <br>
    <?php
        $anosExpDev = 5;
        $cargo = match (true) {
            $anosExpDev <= 4 => "júnior",
            $anosExpDev > 4 && $anosExpDev <= 8 => "pleno",
            default => "senior"
        };

        echo $cargo;
    ?>
</body>

</html>