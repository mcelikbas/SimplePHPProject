<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <div class="container">
        <div>
            <?= utf8_encode($prenom) . ' ' . utf8_encode($nom) ?> <?= $message ?>
        </div>
        <div class="mt-2">
            <a href="/firstphp/index.php" class="btn btn-info">Revenir</a>
        </div>
    </div>

    <?php include_once 'templates/footer.php' ?>
</body>
</html>