<?php
try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=calories_db;charset=utf8",
        "root",
        ""
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}