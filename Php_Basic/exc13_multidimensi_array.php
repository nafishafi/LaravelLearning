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
        // ------- MultiDimension Array -------
        
        // $data = array(
        //     array("programmer, "21", )
        // );
        $data = array(
            array("programmer", "21", "males"),
            array("designer", "24", "rajin"),
            array("manager", "30", "males banget"),
        );

        // 00 01 02
        // 10 11 12
        // 20 21 22

        // print_r($data);
        $data[2][0] = "proyek manager"; // change value
        echo $data[1][1];
    ?>
</body>
</html>