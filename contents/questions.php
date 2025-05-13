<?php
$fichier = fopen("questsheet.csv", "r");
$donnees = [];
while (($ligne = fgetcsv($fichier)) !== false) {
    $donnees[] =  $ligne;
}
fclose($fichier);

$questionnaires = ["CS" => [],
    "HG" => [],
    "JV" => [],
    "MU" => [],
    "NS" => [],
    "SL" => []];



$question_template = [
    "question" => "",
    "answers" => [
        ["content" => "", "value" => "R"],
        ["content" => "", "value" => "W"],
        ["content" => "", "value" => "W"],
        ["content" => "", "value" => "W"]
    ]];

foreach ($donnees as $value) {
    $question_template["question"] = $value[2];
    for ($i=3; $i < 7; $i++) { 
        $question_template["answers"][$i-3]["content"] = $value[$i];
    }
    $questionnaires[trim($value[1])][] = $question_template;
}






