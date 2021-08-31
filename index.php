<?php
    require_once "database/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>PHP-DISCHI</title>
</head>
<body>
    <header id="top-banner">
        <img src="./img/logo.png" alt="">
    </header>
    <div id="container-discs">
        <?php
            foreach($database as $disk){
                echo 
                "
                    <div class=\"text-white\">
                        <div>
                            <img src=\"{$disk['poster']}\" alt=\"cover-disk\">
                        </div>
                        <h5>{$disk['title']}</h5>
                        <span>{$disk['author']}</span> 
                        <span>{$disk['year']}</span>
                        
                    </div>
                ";

            }


        ?>
    </div>
    <img src="" alt="">
    
</body>
</html>