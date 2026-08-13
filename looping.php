<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        echo "<b>LOOPING PERTAMA</b><br>";

    // Ascending
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " - I Love PHP<br>";
    }

    echo "<br>";
    echo "<b>LOOPING KEDUA</b><br>";

    // Descending
    for ($i = 20; $i >= 2; $i -= 2) {
        echo $i . " - I Love PHP<br>";
    }



        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        $numbers = [18, 45, 29, 61, 47, 34];

    echo "Array numbers: ";
    print_r($numbers);

    // Array untuk menampung hasil sisa bagi
    $rest = [];

    // Looping untuk mencari sisa bagi dengan 5
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }

    echo "<br><br>";
    echo "Array sisa baginya adalah: ";
    print_r($rest);


        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    // Key yang akan digunakan
    $keys = ['id', 'name', 'price', 'description', 'source'];

    // Mengubah array biasa menjadi associative array
    foreach ($items as $item) {

        $associative = [];

        foreach ($keys as $index => $key) {
            $associative[$key] = $item[$index];
        }

        echo "<pre>";
        print_r($associative);
        echo "</pre>";
    }

        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        // Output: 
        
        echo "<h3>Soal No 4 Asterix </h3>";
        echo "Asterix:<br>";

    // Membuat pola bintang 5 baris
    for ($i = 1; $i <= 5; $i++) {

        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }

        echo "<br>";
    }

    ?>


</body>
</html>
