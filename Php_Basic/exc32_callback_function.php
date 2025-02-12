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
        // ---- callback function ----
        function berteriak($callback){
            echo "Hallo <br>";
            // $callback();
            // call_user_func($callback, 'selamat datang');
            if(is_callable($callback)){
                call_user_func($callback, 'selamat datang');
            } else{
                echo 'dia bukan fungsi';
            }
        }
        // berteriak();
       
        // berteriak(function(){
        //     echo 'saya anonymous, alias ngga punya nama';
        // });

        $panggil = function($text){
            echo $text;
        };
        berteriak($panggil);

        
    ?>
</body>
</html>