<?php

    require 'contents/header.php';

    $questions = ["question"=>"Qui est le guitariste des Guns'N'Roses?","answers"=>
    [["content"=>"Slash","value"=>"R"],["content"=>"Angus Young","value"=>"W"],
    ["content"=>"Angus Young","value"=>"W"],["content"=>"Angus Young","value"=>"W"]]];


    $tracker = 0;
    $points = 0;

    while ($tracker<=9) {

        DisplayQuestion($tracker);
    }
    echo "<form method='post'>
            <fieldset>
            <legend>Qui est le guitariste des Guns'N'Roses? </legend>

            <div class='answers'>
                <input type='radio' id='slash' name='singer' value='R' />
                <label for='slash'>Slash</label>

                <input type='radio' id='Angus Young' name='singer' value='W' />
                <label for='Angus Young'>Angus Young</label>

                <input type='radio' id='John Frusciante' name='singer' value='W' />
                <label for='John Frusciante'>John Frusciante</label>

                <input type='radio' id='Jimmy Page' name='singer' value='W' />
                <label for='Jimmy Page'>Jimmy Page</label>
            </div>
            <button>Question suivante</button>
        </fieldset>";
        require "contents/footer.php";

        if (isset($_POST['singer'])) {
        var_dump($_POST['singer']);
        echo '<h2>'. $_POST['singer'] .'</h2>';


        DisplayQuestion($number){

        }
    }



    

