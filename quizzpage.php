<?php
require "contents/questions.php";
require "contents/header.php";

$name = "answer";

initSession();

//QUAND ON REPONDS ON LIT CE QUI A CI DESSOUS(issetetc) : MAIS ATTENTION , ON RELIT TOUT TOUT LE CODE EN DESSOUS APRES
if (isset($_POST[$name])) {
    $_SESSION['tracker']++;

}

//CE BOUT DE CODE NE DOIT ETRE FAIT QU'UNE SEULE FOIS!!!!!(reponse au truc d'en haut)
$questions = [];
foreach ($questionnaires as $key => $categoryQuestions) {
    if ($key == $_GET['category']) {
        $questions = $categoryQuestions;
        break;
    }
}
$questionsAmount = count($questions);

displayQuestion($_SESSION['tracker'], $questions, $name);
var_dump($_SESSION['tracker']);

function displayQuestion($number, $_questions, $_name)
{
    echo "<form method='post'><fieldset>";
    echo "<legend>" . $_questions[$number]["question"] . "</legend>";
    echo "<div class='answers'>";
    $answers = $_questions[$number]["answers"];
    shuffle($answers);
    foreach ($answers as $value) {
        echo "<input type='radio' id='" . $value['content'] . "' name='" . $_name . "' value='" . $value['value'] . "' />
                <label for='" . $value['content'] . "'>" . $value['content'] . "</label>";
    }
    echo "</div>
            <button>Question suivante</button>
        </fieldset>";
}

function initSession(){
    session_start();

if (!isset($_SESSION['tracker'])) {
    $_SESSION['tracker'] = 0;
}

if (!isset($_SESSION['points'])) {
    $_SESSION['points'] = 0;
}
}


// IL FAUT :
// CREER LE DISPLAY DE QUESTIONS , LE COMPTEUR DE POINTS , LE QUESITON TRACKER ETC DANS CE FICHIER !
//PUIS CODER LES CONDITIONS DE WIN ET DE LOOSE AUSSI ET VERIFIER SI CA FONCTIONNE.
//NE PAS OUBLIER DE RANDOMISER L'ORDRE DES QUESTIONS !!!!!!!!!!!!!!!!!!!

//OPTI : RANGER ET DOCUMENTER LE CODE
// LE $name pourrait clairement etre interne à la fonction et tout le code pas rangé pourrait lui aussi etre opti.
//oN S'occupera du style apres