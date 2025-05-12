<?php

    require 'contents/header.php';
    require 'contents/questions.php';


    $name = "answer";

    session_start();

    if(!isset($_SESSION['tracker'])) {
    $_SESSION['tracker'] = 0;
    }

  if(!isset($_SESSION['points'])) {
    $_SESSION['points'] = 0;
    }

    Displayquestion($_SESSION['tracker']);
   
    
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

        if (isset($_POST[$name])) {
        echo '<h2>'. $_POST['singer'] .'</h2>';
        }


        function Displayquestion($number){
            echo "<form method='post'>
            <fieldset>
            <legend>";

        }

         
    



    

