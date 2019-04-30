<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'userModel.php';

    function renderCreatedUser($lastname, $firstname) {
        createUser($lastname, $firstname);
    }
    
    function renderUser($id) {
        $user = getUser($id);
        echo $user['nom'] . " " . $user['prenom'];
    }

    function renderListOfUsers() {
        $title = "first php";
        $users = getUsers();
        require 'templates/listView.php';
    }

    function renderUpdatedUser($id, $lastname, $firstname) {
        updateUser($id, $lastname, $firstname);
    }

    function renderDeletedUser() {
        if (isset($_GET['id'])) {
            $user = getUser($_GET['id']);
            deleteUser($_GET['id']);
            echo $user['nom'] . " " . $user['prenom'] . " a été supprimé!";
            echo "<br>";
            echo '<a href="/firstphp/index.php" class="btn btn-danger">Revenir</a>';
        }
    }

?>