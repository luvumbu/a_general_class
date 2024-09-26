<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet JSON Viewer</title>
  
<body>

 

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
    
  console.log(myObj) ; 
 
  }
};
xmlhttp.open("GET", "../json_data.php/"+getLastSegmentFromUrl(), true);
xmlhttp.send();
</script>

 






 




</body>
</html>
