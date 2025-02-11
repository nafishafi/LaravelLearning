<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
        // string method
        // strlen && str_word_count
        // str_replace(find,replace,string)
        //str_repeat(text, times); str_shuffle(text)

        $text = "Hai semuanya disini";
        // echo strlen($text); // Menghitung huruf
        // echo str_word_count($text); // Menghitung jml kata
        // echo str_replace("Hai", "Halo", $text) // mengganti text
        // echo str_repeat("Hai ", 10); // mengulang hai 10 kali
        echo str_repeat(str_replace("Hai", "Hallo", $text), 10); // inner method
    ?>
</body>
</html>