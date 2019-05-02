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
                <th scope="col">Last</th>
                <th scope="col">First</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index=>$user): ?>
                <tr>
                    <th scope="row"><?= $index + 1 ?></th>
                    <td>
                        <a href="index.php/user?id=<?= $user['id'] ?>"><?= utf8_encode($user['nom']) ?></a>
                        <input type="text" class="form-control d-none" id="lastName" placeholder="Last name" value="<?= utf8_encode($user['nom']) ?>" autofocus>
                    </td>
                    <td>
                        <a href="index.php/user?id=<?= $user['id'] ?>"><?= utf8_encode($user['prenom']) ?></a>
                        <input type="text" class="form-control d-none" id="firstName" placeholder="First name" value="<?= utf8_encode($user['prenom']) ?>">
                    </td>
                    <td>
                        <a href="index.php/delete?id=<?= $user['id'] ?>" class="btn btn-danger deleteUserRow">Delete</a>
                        <button class="btn btn-info updateUserButton updateUserRow">Update</button>
                        <a href="index.php/update?id=<?= $user['id'] ?>" class="btn btn-info updateUserRow updateUser d-none">Apply</a>
                    </td>
                </tr>
            <?php endforeach ?>
                <tr class="bg-secondary">
                    <th scope="row">#</th>
                    <td>
                        <input type="text" class="form-control d-none" id="new_lastName" placeholder="Last name" autofocus>
                    </td>
                    <td>
                        <input type="text" class="form-control d-none" id="new_firstName" placeholder="First name">
                    </td>
                    <td>
                        <button class="btn btn-info addUserButton">Add</button>
                        <a href="#" class="btn btn-info d-none" id="addUser">Apply</a>
                    </td>
                </tr>
        </tbody>
    </table>

    <?php include_once 'templates/footer.php' ?>
    <script src='scripts/user.js'></script>
</body>
</html>