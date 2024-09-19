<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet JSON Viewer</title>
 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        #demo {
            width: 90%;
            margin: 20px auto;
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .projet {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #e9e9e9;
            border-radius: 5px;
        }
        .projet h3 {
            margin: 0;
            padding: 5px 0;
            font-size: 18px;
            color: #333;
        }
        .projet p {
            margin: 5px 0;
            padding-left: 10px;
            font-size: 14px;
            color: #666;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Liste des Projets JSON</h2>
<p id="demo">Chargement des données...</p>

<script>

 


function getLastSegmentFromUrl() {
    // Récupère l'URL actuelle
    var currentUrl = window.location.href;
    
    // Extrait le dernier segment de l'URL (après le dernier '/')
    var lastSegment = currentUrl.substring(currentUrl.lastIndexOf('/') + 1);
 
return  lastSegment ; 

   
}

getLastSegmentFromUrl() ; 


console.log(window.location.href) ; 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    
    var output = '';
    myObj.forEach(function(projet, index) {
      output += '<div class="projet">';
      output += '<h3>Projet ' + (index + 1) + ' : ' + projet.title_projet + '</h3>';
      output += '<p><strong>ID Projet:</strong> ' + projet.id_projet + '</p>';
      output += '<p><strong>Nom:</strong> ' + projet.name_projet + '</p>';
      output += '<p><strong>Statut:</strong> ' + projet.statue_projet + '</p>';
      output += '<p><strong>Description:</strong> ' + projet.description_projet + '</p>';
      output += '<p><strong>Date Début:</strong> ' + projet.date_debut_projet + '</p>';
      output += '<p><strong>Date Fin:</strong> ' + projet.date_fin_projet + '</p>';
      output += '<p><strong>Visibilité:</strong> ' + projet.visibility_1_projet + '</p>';
      output += '</div>';
    });
    
    document.getElementById("demo").innerHTML = output;
  }
};
xmlhttp.open("GET", "../json_data.php/"+getLastSegmentFromUrl(), true);
xmlhttp.send();
</script>

 






 




</body>
</html>
