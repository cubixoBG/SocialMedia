<?php

function html_parts($name) {
    require(__DIR__."../html_parts/".$name.".php"); 
}

//Fonction qui créer chaque objet du menu selon le nom de l'image, le nom du fichier
//et le texte à afficher en H4

function menuHeader($folderName, $img, $desc, $text, $color){
    echo "<div id='menuHeader2'>
            <a href='../public/" . $folderName . ".php'>
                <div>
                    <img src='../img/" . $img . ".webp' alt='icon " . $desc . "'>
                    <h4 style='color:".$color.";'>" . $text . "</h4>
                </div>
            </a>
          </div>";
}

?>