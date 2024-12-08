<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $paragrafo = include("./paragrafo.php");
        $paragrafo2 = include "./paragrafo2.php";
    ?>
</head>

<body>
    <div>
        <p>
            <?php echo $paragrafo ?>
            <br>
            <?= $paragrafo ?>
            <br>
            <?= $paragrafo2 ?>
        </p>
    </div>
</body>

</html>