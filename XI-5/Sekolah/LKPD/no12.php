<?php
class Waktu {
    private $jam;
    private $menit;
    private $detik;

    public function __construct($jam, $menit, $detik) {
        $this->jam = $jam;
        $this->menit = $menit;
        $this->detik = $detik;
    }

    public function tambahkanDetik($det) {
        $this->detik += $det;
        $this->menit += intdiv($this->detik, 60);
        $this->detik %= 60;
        $this->jam += intdiv($this->menit, 60);
        $this->menit %= 60;
        $this->jam %= 24;
    }

    public function getFormattedTime() {
        return sprintf("%02d", $this->jam) . ":" . sprintf("%02d", $this->menit) . ":" . sprintf("%02d", $this->detik);
    }
}

$waktu1 = new Waktu(2, 13, 23);
$waktu2 = new Waktu(2, 13, 59);
$waktu3 = new Waktu(1, 59, 59);
$waktu4 = new Waktu(23, 59, 59);

$d = 0;

if (isset($_POST["submit"])) {
    if (!empty($_POST["det"])) {
        $d = $_POST["det"];
        $waktu1->tambahkanDetik($d);
        $waktu2->tambahkanDetik($d);
        $waktu3->tambahkanDetik($d);
        $waktu4->tambahkanDetik($d);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penambahan detik</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h4>Jam Sebelum Penambahan</h4>
        <h5><?= $waktu1->getFormattedTime(); ?></h5>
        <h5><?= $waktu2->getFormattedTime(); ?></h5>
        <h5><?= $waktu3->getFormattedTime(); ?></h5>
        <h5><?= $waktu4->getFormattedTime(); ?></h5>
        <br>

        <form action="" method="post">
            <h4>Tambahan Detik</h4>
            <input type="number" name="det"><br>
            <input type="submit" name="submit">
        </form>

        <div class="sudh">
            <br>
            <h4>Jam sesudah ditambah <?= $d ?> detik</h4>
            <h5><?= $waktu1->getFormattedTime(); ?></h5>
            <h5><?= $waktu2->getFormattedTime(); ?></h5>
            <h5><?= $waktu3->getFormattedTime(); ?></h5>
            <h5><?= $waktu4->getFormattedTime(); ?></h5>
        </div>
    </div>
</body>

</html>