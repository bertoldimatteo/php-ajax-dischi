<?php 

include './server/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>php-dischi</title>
</head>
<body>
    <header>
        <nav>
            
        </nav>
    </header>
    <main>
        <div class="container">
            <?php foreach($database as $music) {?>
                <div class="card">
                    <img class="poster-album" src="<?php echo $music['poster']; ?>" alt="">
                    <h2><?php echo $music['title']; ?></h2>
                    <p><?php echo $music['author']; ?></p>
                    <span><?php echo $music['year']?></span>
                </div>      
            <?php } ?>
        </div>
    </main>
</body>
</html>