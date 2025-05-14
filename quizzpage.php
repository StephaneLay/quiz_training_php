<?php
require "contents/questions.php";
require "contents/header_quiz.php";

$name = "answer";
session_start();

//SET UP LE COMPTEUR DE QUESTIONS,DE POINTS ET LE QUESTIONNAIRE DE LA BONNE CATEGORIE
if (!isset($_SESSION['tracker'])) {
    initSession($questionnaires);
    $question_amount = count($_SESSION['questions']);
}
$question_amount = count($_SESSION['questions']);

if (isset($_POST[$name])) {
    $_SESSION['tracker']++;
    if ($_POST[$name] == "R") {
        $_SESSION['points']++;
    }
}
if ($_SESSION['tracker'] == $question_amount) {
    echo '<h2>' . displayEndQuizz($_SESSION['points'], $question_amount) . '</h2>';
    echo '<a class="navbutton" href="/">Retourner au menu principal</a>';

} else {
    displayQuestion($_SESSION['tracker'], $_SESSION['questions'], $name, $question_amount);
}






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

function displayEndQuizz($points, $_question_amount)
{
    echo '<h1>' . $points . '</h1>';
    $rapport = $points / $_question_amount;

    if ($rapport <= 0.33) {
        return "Mouais bin c'est pas foufou comme résultat y a pas de quoi flamber";
    }
    if ($rapport <= 0.66) {
        return "Franchement pas mal du tout j'ai envie de dire pas mal du tout";
    }
    if ($rapport <= 1) {
        return "Bah bravo t'es juste un.e monstre, ca m'épate ce talent, j'ai meme envie de dire ca m'emeut";
    }
    
    return "Arrete de tricher personne n'aime les tricheurs surtout pas moi";

}