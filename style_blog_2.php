<div id="editor-container">
    <div id="toolbar">
        <button onclick="execCmd('bold')"><strong>Gras</strong></button>
        <button onclick="execCmd('italic')"><em>Italique</em></button>
        <button onclick="execCmd('underline')"><u>Souligner</u></button>
        <button onclick="execCmd('strikeThrough')">Barré</button>
        <button onclick="execCmd('justifyLeft')">Gauche</button>
        <button onclick="execCmd('justifyCenter')">Centrer</button>
        <button onclick="execCmd('justifyRight')">Droite</button>
        <button onclick="execCmd('justifyFull')">Justifier</button>
        <button onclick="execCmd('insertUnorderedList')">Puces</button>
        <button onclick="execCmd('insertOrderedList')">Numéros</button>
        
        <!-- Couleur du texte avec prévisualisation -->
        <input type="color" id="textColorPicker" title="Choisir la couleur du texte" onchange="execCmd('foreColor', this.value)">
        <label for="textColorPicker">Couleur texte</label>
        
        <!-- Couleur de l'arrière-plan avec prévisualisation -->
        <input type="color" id="bgColorPicker" title="Choisir la couleur de fond" onchange="execCmd('backColor', this.value)">
        <label for="bgColorPicker">Couleur fond</label>
        
        <button onclick="execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
        <button onclick="execCmd('unlink')">Supprimer Lien</button>

        <!-- Choix de la taille de la police -->
        <select onchange="execCmd('fontSize', this.value)">
            <option value="3">Taille de police</option>
            <option value="1">Très petit</option>
            <option value="2">Petit</option>
            <option value="3">Normal</option>
            <option value="4">Grand</option>
            <option value="5">Très grand</option>
            <option value="6">Gigantesque</option>
        </select>
        
        <!-- Choix du style de texte -->
        <select onchange="execCmd('formatBlock', this.value)">
            <option value="">Style de texte</option>
            <option value="h1">Titre 1</option>
            <option value="h2">Titre 2</option>
            <option value="h3">Titre 3</option>
            <option value="p">Paragraphe</option>
            <option value="blockquote">Citation</option>
            <option value="pre">Code</option>
        </select>
        
        <!-- Nouveaux éléments -->
        <button onclick="execCmd('superscript')">Exposant</button>
        <button onclick="execCmd('subscript')">Indice</button>
        <button onclick="execCmd('insertHorizontalRule')">Ligne horizontale</button>
        <button onclick="execCmd('insertImage', prompt('Entrer URL de l\'image', 'http://'))">Image</button>
        <button onclick="execCmd('removeFormat')">Effacer Format</button>
        
        <!-- Ajouter une image d'arrière-plan à partir d'une URL -->
        <button onclick="setBackgroundImage()">Image de fond (URL)</button>
        
        <!-- Ajouter une image d'arrière-plan locale -->
        <input type="file" id="bgImageUploader" accept="image/*" title="Choisir une image locale" onchange="setLocalBackgroundImage(event)">
        <label for="bgImageUploader">Image de fond locale</label>
    </div>

    <div id="editor" onkeyup="envoyer(this)" contenteditable="true" style="height:300px;border:1px solid black; padding: 10px;"></div>
</div>

<script>
    function execCmd(command, value = null) {
        try {
            document.execCommand(command, false, value);
        } catch (e) {
            console.error('Command execution failed', e);
        }
    }

    function envoyer(element) {
        console.log(element.innerHTML);

        try {
            var info = new Information("log/test.php");
            info.add("content", element.innerHTML);
            console.log(info.info());
            info.push();
        } catch (e) {
            console.error('Error while sending data', e);
        }
    }

    // Prévisualiser les couleurs sélectionnées
    document.getElementById('textColorPicker').addEventListener('input', function() {
        document.getElementById('editor').style.color = this.value;
    });

    document.getElementById('bgColorPicker').addEventListener('input', function() {
        document.getElementById('editor').style.backgroundColor = this.value;
    });

    // Fonction pour définir une image d'arrière-plan à partir d'une URL
    function setBackgroundImage() {
        var url = prompt('Entrer URL de l\'image de fond', 'http://');
        if (url) {
            document.getElementById('editor').style.backgroundImage = 'url(' + url + ')';
            document.getElementById('editor').style.backgroundSize = 'cover'; // Ajuste l'image pour couvrir tout l'espace
        }
    }

    // Fonction pour définir une image d'arrière-plan locale
    function setLocalBackgroundImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            document.getElementById('editor').style.backgroundImage = 'url(' + dataURL + ')';
            document.getElementById('editor').style.backgroundSize = 'cover'; // Ajuste l'image pour couvrir tout l'espace
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
