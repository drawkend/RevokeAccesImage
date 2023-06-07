<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_POST) {
        setcookie("token", "test");
        echo "<script>window.location.href='./index.php'</script>";
    }
    ?>

    <div style='display:flex;flex-wrap:wrap;gap:10px;'>
        <h1>Connexion</h1>
        <form method="POST">
            <input type="text" name="test" id="test">
            <input type="submit" value="Se connecter">
        </form>
    </div>
</body>

</html>