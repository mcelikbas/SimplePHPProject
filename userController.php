<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once 'userModel.php';

    function renderCreatedUser($lastname, $firstname) {
        createUser($lastname, $firstname);
        renderFeedback($lastname, $firstname, "a été créé!");
    }
    
    function renderUser($id) {
        $user = getUser($id);
        renderFeedback($user['nom'], $user['prenom'], "");
    }

    function renderListOfUsers() {
        $title = "first php";
        $users = getUsers();
        require 'templates/listView.php';
    }

    function renderUpdatedUser($id, $lastname, $firstname) {
        updateUser($id, $lastname, $firstname);
        renderFeedback($lastname, $firstname, "a été mis a jour!");
    }

    function renderDeletedUser($id) {
        $user = getUser($id);
        deleteUser($id);
        renderFeedback($user['nom'], $user['prenom'], " a été supprimé!");
    }

    function renderFeedback($lastname, $firstname, $feedbackMessage) {
        $nom = $lastname;
        $prenom = $firstname;
        $message = $feedbackMessage;
        require 'templates/operationFeedback.php';
    }


?>