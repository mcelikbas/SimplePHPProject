<?php
    require_once 'db_connect.php';

    function createUser($nom, $prenom) {
        $conn = openConnection();
        $sql = "INSERT INTO user (nom, prenom)
                VALUES (:nom,:prenom)";
        $stmt = $conn->prepare($sql);
        $nom = sanitizeString($nom);
        $prenom = sanitizeString($prenom);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);

        $stmt->execute();
        $stmt = null;
        closeConnection($conn);
        return true;
    }

    function getUser($id) {
        $conn = openConnection();
        $sql = "SELECT nom, prenom
                FROM user
                WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute([':id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $stmt = null;
        closeConnection($conn);
        return $result;
    }

    function getUsers() {
        $conn = openConnection();
        $sql = "SELECT id, nom, prenom
                FROM user";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = null;
        closeConnection($conn);
        return $result;
    }

    function updateUser($id, $nom, $prenom) {
        $conn = openConnection();
        $sql = "UPDATE user
                SET nom=:nom, prenom=:prenom
                WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $nom = sanitizeString($nom);
        $prenom = sanitizeString($prenom);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->execute();

        $stmt = null;
        closeConnection($conn);
        return true;
    }

    function deleteUser($id) {
        $conn = openConnection();
        $sql = "DELETE FROM user
                WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();
        $stmt = null;
        closeConnection($conn);
        return true;
    }

    function sanitizeString($str) {
        $str = trim($str);
        $str = filter_var($str, FILTER_SANITIZE_STRING);
        return $str;
    }

?>