<?php
// Établir une connexion à la base de données
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "test2";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// Vérifier si le formulaire de suppression a été soumis
if (isset($_POST['delete'])) {

    // Récupérer l'identifiant de l'étudiant à supprimer
    $id = $_POST['id'];

    // Requête SQL pour supprimer l'étudiant avec l'identifiant spécifié
    $sql = "DELETE FROM etudiant WHERE id = :id";

    // Préparation de la requête SQL
    $requete = $conn->prepare($sql);

    // Exécution de la requête SQL avec l'identifiant de l'étudiant à supprimer
    $requete->execute(array(
        'id' => $id
    ));

    echo "L'étudiant a été supprimé avec succès.";
}
?>