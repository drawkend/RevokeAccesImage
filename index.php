<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style='display:flex;flex-wrap:wrap;gap:10px;'>

        <?php

        if (!isset($_COOKIE['token'])) {
            // L'utilisateur n'est pas authentifié, effectuez l'action appropriée (redirection, message d'erreur, etc.).
            echo "<script>window.location.href='./login.php'</script>";
        } else {
            $files = scandir('medias/');

            foreach ($files as $file) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif', 'webp'))) {
                    echo "<img src='./test.php?nom_image=$file' style='height:140px;'>";
                }
            }
        }



        ?>
    </div>
</body>

</html>