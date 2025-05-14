<?php
require "contents/questions.php";
require "contents/header.php";

$name = "answer";

//SET UP LE COMPTEUR DE QUESTIONS,De POINTS ET LE QUESITONNAIRE DE LA BONNE CATEGORIE + RETURN LE NB DE QUESTION DE LA CATEGORIE
if (!isset($_SESSION['tracker'])) {
    $question_amount = initSession($questionnaires);
}

//QUAND ON REPONDS ON LIT CE QUI A CI DESSOUS(issetetc) : DONC CE TRUC DE REPONSE + LE DISPLAY QUESTION POUR LE MOMENT
if (isset($_POST[$name])) {
    $_SESSION['tracker']++;
}

//UNE FOIS TOUTES LES QUESTIONS REPONDUES , ON VA DEVOIR AFFICHER UN ECRAN DE RESULTAT , AVEC UN NOUVEAU BUTTON;
//UNE FOIS CE BOUTON CLIQUe, ON REVIENT SUR INDEX ET ON RESET TOUTES LES VAR SESSION

displayQuestion($_SESSION['tracker'], $_SESSION['questions'], $name);

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

function initSession($_questionnaireGlobal)
{
    session_start();

    $_SESSION['tracker'] = 0;

    if (!isset($_SESSION['points'])) {
        $_SESSION['points'] = 0;
    }
    if (!isset($_SESSION['questions'])) {
        $_SESSION['questions'] = [];
        foreach ($_questionnaireGlobal as $key => $categoryQuestions) {
            if ($key == $_GET['category']) {
                $_SESSION['questions'] = $categoryQuestions;
                return count($_SESSION['questions']);
            }
        }
    }
}

// IL FAUT :
// CREER LE DISPLAY DE QUESTIONS , LE COMPTEUR DE POINTS , LE QUESITON TRACKER ETC DANS CE FICHIER !
//PUIS CODER LES CONDITIONS DE WIN ET DE LOOSE AUSSI ET VERIFIER SI CA FONCTIONNE.
//NE PAS OUBLIER DE RANDOMISER L'ORDRE DES QUESTIONS !!!!!!!!!!!!!!!!!!!

//OPTI : RANGER ET DOCUMENTER LE CODE