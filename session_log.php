<?php 

var_dump($_SESSION["session_general"]) ; 

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="session_log.css">
 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="editor-container">
    <div id="toolbar">
        <div>
            <button onclick="execCmd('bold')"><strong>Gras</strong></button>
            <button onclick="execCmd('italic')"><em>Italique</em></button>
            <button onclick="execCmd('underline')"><u>Souligner</u></button>
            <button onclick="execCmd('strikeThrough')">Barré</button>
            <select onchange="execCmd('formatBlock', this.value)">
                <option value="">Style de texte</option>
                <option value="h1">Titre 1</option>
                <option value="h2">Titre 2</option>
                <option value="h3">Titre 3</option>
                <option value="p">Paragraphe</option>
            </select>
            <select onchange="execCmd('fontSize', this.value)">
                <option value="3">Taille de police</option>
                <option value="1">Très petit</option>
                <option value="2">Petit</option>
                <option value="3">Normal</option>
                <option value="4">Grand</option>
                <option value="5">Très grand</option>
                <option value="6">Gigantesque</option>
            </select>
        </div>
        <div>
            <button onclick="execCmd('justifyLeft')">Gauche</button>
            <button onclick="execCmd('justifyCenter')">Centrer</button>
            <button onclick="execCmd('justifyRight')">Droite</button>
            <button onclick="execCmd('justifyFull')">Justifier</button>
            <button onclick="execCmd('insertUnorderedList')">Puces</button>
            <button onclick="execCmd('insertOrderedList')">Numéros</button>
            <button onclick="execCmd('foreColor', prompt('Couleur du texte', '#000000'))">Couleur texte</button>
            <button onclick="execCmd('backColor', prompt('Couleur de fond', '#ffffff'))">Couleur fond</button>
            <button onclick="execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
            <button onclick="execCmd('unlink')">Supprimer Lien</button>
        </div>
    </div>

    <div id="editor" onkeyup="envoyer(this)" contenteditable="true"></div>
</div>

<script>
    function execCmd(command, value = null) {
        document.execCommand(command, false, value);
    }
    function envoyer(_this){
        console.log(_this.innerHTML);



        var ok = new Information("log/test.php"); // création de la classe 
            ok.add("login", _this.innerHTML); // ajout de l'information pour lenvoi 
            ok.add("password", _this.innerHTML); // ajout d'une deuxieme information denvoi  
            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 
    }
</script>

</body>
</html>
