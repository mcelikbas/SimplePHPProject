<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index=>$user): ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td><?= utf8_encode($user['nom']) ?></td>
                    <td><?= utf8_encode($user['prenom']) ?></td>
                    <td><a href="index.php/delete?id=<?= $user['id'] ?>" class="btn btn-danger deleteUserButton">Delete</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php include_once 'templates/footer.php' ?>
    <!--<script src='scripts/deleteUser.js'></script>-->
</body>
</html>