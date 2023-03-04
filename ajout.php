<?php
// Établir une connexion à la base de données
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "test2";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $telephone = $_POST['telephone'];
    $genre = $_POST['genre'];
    
    // Requête SQL pour insérer les données dans la table "etudiant"
    $sql = "INSERT INTO etudiant (nom, prenom, email, date_naissance, telephone, genre) 
            VALUES (:nom, :prenom, :email, :date_naissance, :telephone, :genre)";
            
    // Préparation de la requête SQL
    $requete = $conn->prepare($sql);

    // Exécution de la requête SQL avec les données du formulaire
    $requete->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'date_naissance' => $date_naissance,
        'telephone' => $telephone,
        'genre' => $genre
    ));

    echo "Les données ont été enregistrées avec succès.";
}
?>