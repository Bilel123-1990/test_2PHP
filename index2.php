<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>


    <div class="buttons-container">
        <button class="profile-button">Modifier mon profil</button>
        <button class="children-button">Mes enfants</button>
    </div>


    <section>
        <div class="profiles">
            <div class="profile">
                <img src="22.jpg" alt="Profil 1">
                <h3>Nom du profil 1</h3>
            </div>

            <div class="profile">
                <img src="55.jpg" alt="Profil 2">
                <h3>Nom du profil 2</h3>
            </div>

            <div class="profile">
                <img src="44.jpg" alt="Profil 3">
                <h3>Nom du profil 3</h3>
            </div>

            <div class="profile">
                <button>+</button>
            </div>
        </div>
    </section>

    <section>
        <h2>Information de base:</h2>

        <div class="profile-info">
            <img class="profile-image" src="22.jpg" alt="Photo de profil">
            <div class="profile-buttons">
                <button class="replace-button"><i class="fa-solid fa-pen"></i>Remplacer</button>
                <button class="delete-button"><i class="fa-solid fa-trash-can"></i>Supprimer</button>
            </div>
        </div>
        <!-- <?php include("modif.php") ?> -->
        <form method="post" action="modif.php">
            <input type="hidden" name="id" value="<?php echo $etudiant['id']; ?>">

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo $etudiant['prenom']; ?>"><br>


            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo $etudiant['nom']; ?>"><br>

            <label for="date_naissance">Date de naissance :</label>
            <input type="date" name="date_naissance" id="date_naissance"
                value="<?php echo $etudiant['date_naissance']; ?>"><br>

            <label>Genre :</label>
            <label for="genre_garcon">
                <input type="radio" id="genre_garcon" name="genre" value="garcon">
                Garçon
            </label>

            <label for="genre_fille">
                <input type="radio" id="genre_fille" name="genre" value="fille">
                Fille
            </label>

            <label for="genre_autre">
                <input type="radio" id="genre_autre" name="genre" value="autre">
                Autre
            </label><br><br>

            <button type="button" class="annuler-button">Annuler</button>
            <button type="submit" class="enregistrer-button" name="submit">Enregistrer</button>
        </form>

    </section>




    <!-- <div>
            <h2> les réseaux sociaux De gery </h2>
        </div> -->

    <!-- <ul>
            <li><a href="https://www.facebook.com/monentreprise"><i class="fab fa-facebook"></i> Facebook</a></li>
            <li><a href="https://twitter.com/monentreprise"><i class="fab fa-twitter"></i> Twitter</a></li>
            <li><a href="https://www.instagram.com/monentreprise"><i class="fab fa-instagram"></i> Instagram</a></li>
        </ul> -->
    <section class="reseaux_sociaux">

        <a href="https://www.facebook.com/monentreprise" class="facebook-link">
            <i class="fab fa-facebook"></i> </a> Facebook
        <input type="text" id="input-text" name="name">
        <button type="submit" class="btn-save">Enregistrer</button>
    </section>






</body>

</html>