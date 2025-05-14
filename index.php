<?php

require 'contents/header.php';
require 'contents/questions.php';


initButtons();
session_start();
session_destroy();

require "contents/footer.php";



function initButtons()
{
    echo "<a href='/quizzpage.php?category=CS'>Quizz Ciné & Séries</a>
<a href='/quizzpage.php?category=HG'>Quizz Histoire & Géo</a>
<a href='/quizzpage.php?category=JV'>Quizz Jeux vidéos</a>
<a href='/quizzpage.php?category=MU'>Quizz Musique</a>
<a href='/quizzpage.php?category=NS'>Quizz Nature & Sciences</a>
<a href='/quizzpage.php?category=SL'>Quizz Sports & Loisirs</a>";
}

// function  ResetSession($_questionnaireGlobal){
//     sess
// }
?>