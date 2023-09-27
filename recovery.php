<?php
//connexion à la base de données
$host = 'localhost';
$dbname = 'RECOVERY';
$username = 'root';
$password = '';

try {
    //connexion PDO à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Définir le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //"USER"
    $sql = "INSERT INTO user (nom, prenoms, tel, email) VALUES (:nom, :prenoms, :tel, :email)";
    
    // Préparer SQL
    $stmt = $pdo->prepare($sql);

    // Données à insérer
    $nom = $_POST["nom"];
    $prenoms = $_POST["prenoms"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    
    // Binder les valeurs
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenoms', $prenoms);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':email', $email);

    // Exécuter la requête
    $stmt->execute();

    echo "Enregistrement effectué avec succès.";

} catch (PDOException $e) {
    echo "Erreur lors de l'enregistrement : " . $e->getMessage();
}
?>