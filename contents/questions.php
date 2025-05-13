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

$questionnaires_source = [
    ["category" => "CS", "questionnaire" => []],
    ["category" => "HG", "questionnaire" => []],
    ["category" => "JV", "questionnaire" => []],
    ["category" => "MU", "questionnaire" => []],
    ["category" => "NS", "questionnaire" => []],
    ["category" => "SL", "questionnaire" => []]
];

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
    $questionnaires[$value[1]][] = $question_template;
}

var_dump($questionnaires);





//     [[// QUESTION 1
//     "question" => "Quel groupe a enregistré l'album 'Nevermind' ?",
//     "answers" => [
//         ["content" => "Nirvana", "value" => "R"],
//         ["content" => "Green Day", "value" => "W"],
//         ["content" => "The Offspring", "value" => "W"],
//         ["content" => "Pearl Jam", "value" => "W"]
//     ]],
// [// QUESTION 2
//     "question" => "Qui est le chanteur du groupe Queen ?",
//     "answers" => [
//         ["content" => "Freddie Mercury", "value" => "R"],
//         ["content" => "Robert Plant", "value" => "W"],
//         ["content" => "David Bowie", "value" => "W"],
//         ["content" => "Axl Rose", "value" => "W"]
//     ]],
// [// QUESTION 3
//     "question" => "Quel groupe est connu pour la chanson 'Smoke on the Water' ?",
//     "answers" => [
//         ["content" => "Deep Purple", "value" => "R"],
//         ["content" => "Led Zeppelin", "value" => "W"],
//         ["content" => "AC/DC", "value" => "W"],
//         ["content" => "Black Sabbath", "value" => "W"]
//     ]],
// [// QUESTION 4
//     "question" => "Quel est le surnom du guitariste Saul Hudson ?",
//     "answers" => [
//         ["content" => "Slash", "value" => "R"],
//         ["content" => "Edge", "value" => "W"],
//         ["content" => "Buckethead", "value" => "W"],
//         ["content" => "Flea", "value" => "W"]
//     ]],
// [// QUESTION 5
//     "question" => "Dans quel groupe joue Dave Grohl comme chanteur et guitariste ?",
//     "answers" => [
//         ["content" => "Foo Fighters", "value" => "R"],
//         ["content" => "Nirvana", "value" => "W"],
//         ["content" => "Queens of the Stone Age", "value" => "W"],
//         ["content" => "Soundgarden", "value" => "W"]
//     ]],
// [// QUESTION 6
//     "question" => "Quel est le titre du premier album des Rolling Stones ?",
//     "answers" => [
//         ["content" => "The Rolling Stones", "value" => "R"],
//         ["content" => "Let It Bleed", "value" => "W"],
//         ["content" => "Sticky Fingers", "value" => "W"],
//         ["content" => "Exile on Main St.", "value" => "W"]
//     ]],
// [// QUESTION 7
//     "question" => "Qui est le chanteur des Red Hot Chili Peppers ?",
//     "answers" => [
//         ["content" => "Anthony Kiedis", "value" => "R"],
//         ["content" => "John Frusciante", "value" => "W"],
//         ["content" => "Flea", "value" => "W"],
//         ["content" => "Chad Smith", "value" => "W"]
//     ]],
// [// QUESTION 8
//     "question" => "Quel groupe est connu pour la chanson 'Californication' ?",
//     "answers" => [
//         ["content" => "Red Hot Chili Peppers", "value" => "R"],
//         ["content" => "Green Day", "value" => "W"],
//         ["content" => "The Killers", "value" => "W"],
//         ["content" => "Linkin Park", "value" => "W"]
//     ]],
// [// QUESTION 9
//     "question" => "Quel membre des Beatles est décédé en 1980 ?",
//     "answers" => [
//         ["content" => "John Lennon", "value" => "R"],
//         ["content" => "George Harrison", "value" => "W"],
//         ["content" => "Paul McCartney", "value" => "W"],
//         ["content" => "Ringo Starr", "value" => "W"]
//     ]],
// [//QUESTION 10
//     "question"=>"Qui est le guitariste des Guns'N'Roses?",
//     "answers"=>[
//     ["content"=>"Slash","value"=>"R"],
//     ["content"=>"Angus Young","value"=>"W"],
//     ["content"=>"John Frusciante","value"=>"W"],
//     ["content"=>"Jimmy Page","value"=>"W"]]],
// ];

