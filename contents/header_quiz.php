<?php
$category = getCategory($_GET['category']);
echo
    '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>' . $category . '</title>
</head>
<body>
    <hgroup>
        <h1>Quizz ' . $category . '</h1>
        <p>Eval Stephane Lay</p>
    </hgroup>
    <main>';

function getCategory($_cat)
{
    switch ($_cat) {
        case 'CS':
            return 'Ciné & Séries';
            break;
        case 'HG':
            return 'Histoire & Géo';
            break;
        case 'JV':
            return 'Jeux vidéos';
            break;
        case 'MU':
            return 'Musique';
            break;
        case 'NS':
            return 'Nature & sciences';
            break;
        case 'SL':
            return 'Sports & Loisirs';
            break;

    }
}
?>