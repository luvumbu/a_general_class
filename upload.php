<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/";

        // Créer le répertoire s'il n'existe pas
        if (!is_dir($target_dir)) {
            if (!mkdir($target_dir, 0755, true)) {
                die("Erreur : Impossible de créer le répertoire de destination.");
            }
        }

        // Utiliser time() pour générer un nom de fichier unique
        $timestamp = time();
        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
        $target_file = $target_dir . $timestamp . '.' . $imageFileType;

        $uploadOk = 1;

        // Vérifiez si le fichier est bien une image
        if ($_FILES['image']['tmp_name'] != '') {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                echo "Le fichier est une image - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "Le fichier n'est pas une image.<br>";
                $uploadOk = 0;
            }
        } else {
            echo "Aucun fichier n'a été téléchargé.<br>";
            $uploadOk = 0;
        }

        // Vérifiez la taille du fichier
        if ($_FILES["image"]["size"] > 500000) { // 500KB
            echo "Désolé, votre fichier est trop volumineux.<br>";
            $uploadOk = 0;
        }

        // Autoriser certains formats de fichiers
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Désolé, seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.<br>";
            $uploadOk = 0;
        }

        // Vérifiez si $uploadOk est à 0 en raison d'une erreur
        if ($uploadOk == 0) {
            echo "Désolé, votre fichier n'a pas été téléchargé.<br>";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Le fichier ". htmlspecialchars(basename($_FILES["image"]["name"])). " a été téléchargé avec succès sous le nom " . $timestamp . '.' . $imageFileType . ".<br>";
            } else {
                echo "Désolé, une erreur s'est produite lors de l'envoi de votre fichier.<br>";
            }
        }
    } else {
        if (isset($_FILES['image']['error'])) {
            switch ($_FILES['image']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    echo "Le fichier dépasse la directive upload_max_filesize dans php.ini.<br>";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo "Le fichier dépasse la directive MAX_FILE_SIZE spécifiée dans le formulaire HTML.<br>";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "Le fichier n'a été que partiellement téléchargé.<br>";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "Aucun fichier n'a été téléchargé.<br>";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "Il manque un dossier temporaire.<br>";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo "Échec de l'écriture du fichier sur le disque.<br>";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo "Le téléchargement du fichier a été stoppé par une extension PHP.<br>";
                    break;
                default:
                    echo "Erreur inconnue lors du téléchargement du fichier.<br>";
                    break;
            }
        } else {
            echo "Erreur : aucun fichier sélectionné ou une erreur s'est produite lors du téléchargement.<br>";
        }
    }
}
?>

<script>

    const myTimeout = setTimeout(myGreeting, 1000);

function myGreeting() {
    window.history.back();

}


</script>
