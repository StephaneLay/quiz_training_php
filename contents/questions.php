<?php

//Le csv est ouvert,lu et chaque ligne de mon csv est entré comme une valeur du tableau donnees
$fichier = fopen("questsheet.csv", "r");
$donnees = [];
while (($ligne = fgetcsv($fichier)) !== false) {
    $donnees[] = $ligne;
}
fclose($fichier);

//Tableau associatif avec 'category'=>'questions_de_cette_categorie[]'
$questionnaires = [
    "CS" => [],
    "HG" => [],
    "JV" => [],
    "MU" => [],
    "NS" => [],
    "SL" => []
];

//Modele vide de question à completer et a ajouter à la bonne categorie dans la tableau questionnaires[]
$question_template = [
    "question" => "",
    "answers" => [
        ["content" => "", "value" => "R"],
        ["content" => "", "value" => "W"],
        ["content" => "", "value" => "W"],
        ["content" => "", "value" => "W"]
    ]
];

//Ici pour chaque ligne de donnees, on remplit un question_template avec chaque element de la ligne au bon endroit
//Ca aurait été plus propre avec une en tete dans mon csv que en faisant des calculs avec des index mais tout fonctionne
//Mon questionnaires[] est full rempli comme il faut
foreach ($donnees as $value) {
    $question_template["question"] = $value[2];
    for ($i = 3; $i < 7; $i++) {
        $question_template["answers"][$i - 3]["content"] = $value[$i];
    }
    $questionnaires[trim($value[1])][] = $question_template;
}






