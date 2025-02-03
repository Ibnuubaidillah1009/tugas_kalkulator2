<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalkulator Online</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form>
        <h1>Hasil Perhitungan</h1>
    <?php
    if (isset($_GET['angka1'], $_GET['angka2'], $_GET['operator'])) {
        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $operator = $_GET['operator'];

        if ($angka1 == "" || $angka2 == "") {
            echo "Error: Harap masukkan kedua angka!";
        } elseif($operator == '+') {
            $hasil = $angka1 + $angka2;
            echo $angka1 . $operator . $angka2 . '=' . $hasil;
        } elseif($operator == '-') {
            $hasil = $angka1 - $angka2;
            echo $angka1 . $operator . $angka2 . '=' . $hasil;
        } elseif($operator == ':') {
            if ($angka2 == 0) {
                echo "Error: Maaf input salah";
            } else {
                $hasil = $angka1 / $angka2;
                echo $angka1 . $operator . $angka2 . '=' . $hasil;
            }
        } elseif($operator == 'x') {
            $hasil = $angka1 * $angka2;
            echo $angka1 . $operator . $angka2 . '=' . $hasil;
        } elseif ($operator == '^') {
            $hasil = $angka1 ** $angka2;
            echo $angka1 . $operator . $angka2 . '=' . $hasil;
        } elseif ($operator == '%') {
            $hasil = $angka1 % $angka2;
            echo $angka1 . $operator . $angka2 . '=' . $hasil;
        }
        }
    ?>
    <a href="index.php">Kembali</a>
    <a type="button" onclick="return window.print();">Cetak</a>
</form>
</body>
</html>
