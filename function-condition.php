<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
function greetings($nama)
    {
        echo "Halo " . $nama . ", Selamat Datang di Jabar Coding Camp!";
    }

    greetings("Bagas");
    echo "<br>";
    greetings("Wahyu");
    echo "<br>";
    greetings("Abdul");

    echo "<br><br>";


echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
function reverseString($string)
    {
        $hasil = "";

        // Mulai dari karakter terakhir
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $hasil .= $string[$i];
        }

        echo $hasil;
    }

    reverseString("abduh");
    echo "<br>";

    reverseString("Bootcamp");
    echo "<br>";

    reverseString("We Are JCC Developers");

echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
function palindrome($string)
    {
        $hasil = "";

        // Membalik string menggunakan looping
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $hasil .= $string[$i];
        }

        // Mengecek apakah string sama dengan hasil kebalikannya
        if ($string == $hasil) {
            return true;
        } else {
            return false;
        }
    }

    // Contoh penggunaan
    echo palindrome("civic") ? "true" : "false";
    echo "<br>";

    echo palindrome("nababan") ? "true" : "false";
    echo "<br>";

    echo palindrome("jambaban") ? "true" : "false";
    echo "<br>";

    echo palindrome("racecar") ? "true" : "false";

    echo "<br><br>";



echo "<h3>Soal No 4 Tentukan Nilai </h3>";
function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup";
        } else {
            return "Kurang";
        }
    }

    echo tentukan_nilai(98);
    echo "<br>";

    echo tentukan_nilai(76);
    echo "<br>";

    echo tentukan_nilai(67);
    echo "<br>";

    echo tentukan_nilai(43);


?>

</body>

</html>