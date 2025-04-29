<?php
require_once 'config2.php';

// Récupérer les données JSON envoyées
$data = json_decode(file_get_contents('php://input'), true);

try {
    // Préparer la requête SQL
    $sql = "INSERT INTO commandes (base, ingredients, sauce, boisson, calories_total, prix_total, date_commande) 
            VALUES (:base, :ingredients, :sauce, :boisson, :calories_total, :prix_total, NOW())";
    
    $stmt = $conn->prepare($sql);
    
    // Exécuter la requête avec les données
    $success = $stmt->execute([
        ':base' => $data['base'],
        ':ingredients' => $data['ingredients'],
        ':sauce' => $data['sauce'],
        ':boisson' => $data['boisson'],
        ':calories_total' => $data['calories_total'],
        ':prix_total' => $data['prix_total']
    ]);

    // Envoyer la réponse
    echo json_encode(['success' => $success]);

} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}