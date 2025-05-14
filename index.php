<?php

require 'contents/header.php';
require 'contents/questions.php';


//JOLI INDEX AVEC IMAGES
//OPTI : RANGER ET DOCUMENTER LE CODE
//FULL GENERATION DE STYLE POUR RENDRE LE QUIZ BEAU

initButtons();
session_start();
session_destroy();

require "contents/footer.php";



function initButtons()
{
    echo '<div class="quizzcards">
    <img src="assets/History.jpg" alt="">
    <a class="navbutton" href="/quizzpage.php?category=HG">Quizz Histoire & Géo</a>
</div>
<div class="quizzcards">
    <img src="assets/movies.jpg" alt="">
    <a class="navbutton" href="/quizzpage.php?category=CS">Quizz Ciné & Séries</a>
</div>
<div class="quizzcards">
    <img src="assets/videogames.jpg" alt="">
    <a class="navbutton" href="/quizzpage.php?category=JV">Quizz Jeux vidéos</a>
</div>
<div class="quizzcards">
    <img src="assets/music.jpg" alt="">
    <a class="navbutton" href="/quizzpage.php?category=MU">Quizz Musique</a>
</div>
<div class="quizzcards">
    <img src="assets/science and nature.jpg" alt="">
    <a class="navbutton" href="/quizzpage.php?category=NS">Quizz Nature & Sciences</a>
</div>
<div class="quizzcards">
    <img src="assets/TV.jpg" alt="">
    <a class="navbutton" href="/quizzpage.php?category=SL">Quizz Sports & Loisirs</a>"
</div>';
        





}


?>

