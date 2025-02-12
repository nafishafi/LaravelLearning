<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Array PHP</h1>
    <?php
        // ------- If and else -------
        // operator logika == === > >= < <= !=
        // === -> tidak hanya 3 sama dengan tetapi type data nya juga
        $password = '123';
        $password2 = 123;

        if($password === $password2){
            echo 'anda berhasil masuk!';
        } else {
            echo 'gagal! passwordnya salah';
        }
    ?>
</body>
</html>