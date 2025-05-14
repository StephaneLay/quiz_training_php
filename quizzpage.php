<?php
require "contents/questions.php";
require "contents/header.php";

$name = "answer";
session_start();

//SET UP LE COMPTEUR DE QUESTIONS,DE POINTS ET LE QUESTIONNAIRE DE LA BONNE CATEGORIE
if (!isset($_SESSION['tracker'])) {
    initSession($questionnaires);
    $question_amount = count($_SESSION['questions']);
    // displayQuestion($_SESSION['tracker'], $_SESSION['questions'], $name, $question_amount);
}
$question_amount = count($_SESSION['questions']);


//QUAND ON REPONDS ON LIT CE QUI A CI DESSOUS(issetetc) : DONC CE TRUC DE REPONSE + LE DISPLAY QUESTION POUR LE MOMENT


if (isset($_POST[$name])) {
    $_SESSION['tracker']++;
    if ($_POST[$name] == "R") {
        $_SESSION['points']++;
    }
}
if ($_SESSION['tracker'] == $question_amount) {
        echo '<h1>' . $_SESSION['points'] . '</h1>';
        echo '<a href="/">Retourner au menu principal</a>';


}else{
        displayQuestion($_SESSION['tracker'], $_SESSION['questions'], $name, $question_amount);
}




//UNE FOIS TOUTES LES QUESTIONS REPONDUES , ON VA DEVOIR AFFICHER UN ECRAN DE RESULTAT , AVEC UN NOUVEAU BUTTON;
//UNE FOIS CE BOUTON CLIQUe, ON REVIENT SUR INDEX ET ON RESET TOUTES LES VAR SESSION
//OPTI : RANGER ET DOCUMENTER LE CODE



function displayQuestion($number, $_questions, $_name, $_questionAmount)
{
    echo '<h2>' . $number + 1 . '/' . $_questionAmount . '</h2>';
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
    $_SESSION['tracker'] = 0;

    if (!isset($_SESSION['points'])) {
        $_SESSION['points'] = 0;
    }
    if (!isset($_SESSION['questions'])) {
        $_SESSION['questions'] = [];
        foreach ($_questionnaireGlobal as $key => $categoryQuestions) {
            if ($key == $_GET['category']) {
                $_SESSION['questions'] = $categoryQuestions;
                return;
            }
        }
    }
}




