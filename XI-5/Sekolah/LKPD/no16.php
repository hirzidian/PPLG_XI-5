<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan 1 sampai 50</title>
</head>
<body>
    <div class="container">
        <h1>Bilangan dari 1 sampai 50:</h1>
        <p>
            <?php
            for ($i = 1; $i <= 50; $i++) {
                echo $i . " ";
            }
            ?>
        </p>

        <h2>Bilangan Genap:</h2>
        <p>
            <?php
            for ($i = 2; $i <= 50; $i += 2) {
                echo $i . " ";
            }
            ?>
        </p>

        <h2>Bilangan Ganjil:</h2>
        <p>
            <?php
            for ($i = 1; $i <= 50; $i += 2) {
                echo $i . " ";
            }
            ?>
        </p>

        <a href="no17.php">Lanjut</a>
        <br><br>
        <a href="no15.php">Kembali</a> 
    </div>
</body>
</html>
