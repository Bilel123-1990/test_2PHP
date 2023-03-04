<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>

    <link rel="stylesheet" href="dist/css/intlTelInput.scss">
    <script src="dist/js/intlTelInput.js"></script>



</head>

<body>

    <?php include("ajout.php"); ?>


    <div class="buttons-container">
        <button class="profile-button">Modifier mon profil</button>
        <button class="children-button">Mes enfants</button>
    </div>

    <div class="profile-section">

        <form class="profile-form" method="post">

            <div class="profile-info">
                <img class="profile-image" src="11.jpg" alt="Photo de profil">
                <div class="profile-buttons">
                    <button class="replace-button" type="submit" name="submit"><i
                            class="fa-solid fa-pen"></i>Remplacer</button>
                    <button class="delete-button" type="submit" name="delete">Supprimer</button>
                </div>
            </div>



            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom">
            </div>

            <div class="form-group">
                <label for="nom">Prenom :</label>
                <input type="text" id="prenom" name="prenom">
            </div>

            <div class="form-group">
                <label for="email">Adresse mail :</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="date">Date de naissance :</label>
                <input type="date" id="date" name="date_naissance">

            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel" id="telephone" name="telephone" class="intl-tel-input">
            </div>

            <div class="form-group">
                <label>Genre :</label>
                <div class="radio-buttons">
                    <label for="parent1"><input type="radio" id="parent1" name="genre" value="parent1"> Parent
                        1</label>
                    <label for="parent2"><input type="radio" id="parent2" name="genre" value="parent2"> Parent
                        2</label>
                </div>
            </div>


            <div class="form-buttons">
                <button class="cancel-button">Annuler</button>
                <button class="save-button" type="submit" name="submit">Enregistrer</button>
            </div>
        </form>
    </div>





    <!-- <script>
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        preferredCountries: ["us", "gb", "fr"], // pays préférés
        separateDialCode: true, // afficher l'indicatif du pays dans un champ distinct
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js", // script d'utilitaires pour la bibliothèque
    });
    </script> -->

</body>

</html>