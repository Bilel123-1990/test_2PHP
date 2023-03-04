<?php
// Établir une connexion à la base de données
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "test2";
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

// Vérifier si le formulaire a été soumis
if (isset($_POST['submit'])) {

    // Récupérer l'identifiant de l'étudiant à modifier
    $id = $_POST['id'];

    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $telephone = $_POST['telephone'];
    $genre = isset($_POST['genre']) ? $_POST['genre'] : "";
    
    // Requête SQL pour mettre à jour les données de l'étudiant dans la table "etudiant"
    $sql = "UPDATE etudiant SET nom = :nom, prenom = :prenom, email = :email, date_naissance = :date_naissance, telephone = :telephone, genre = :genre 
            WHERE id = :id";
            
    // Préparation de la requête SQL
    $requete = $conn->prepare($sql);

    // Exécution de la requête SQL avec les données du formulaire
    $requete->execute(array(
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'date_naissance' => $date_naissance,
        'telephone' => $telephone,
        'genre' => $genre,
        'id' => $id
    ));

    echo "Les données ont été mises à jour avec succès.";
}

// Récupérer les informations de l'étudiant à modifier
$id = $_GET['id'];
$sql = "SELECT * FROM etudiant WHERE id = :id";
$requete = $conn->prepare($sql);
$requete->execute(array('id' => $id));
$etudiant = $requete->fetch(PDO::FETCH_ASSOC);
?>