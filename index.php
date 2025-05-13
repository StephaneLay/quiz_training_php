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
    // var_dump($questionnaires);
    //Display_question($_SESSION['tracker'],$questions,$name);
   
    


    
        require "contents/footer.php";

        if (isset($_POST[$name])) {
        $_SESSION['tracker'] ++;
        var_dump($_POST[$name]);
        }


        function Display_question($number,$_questions,$_name){
            echo "<form method='post'><fieldset>";
            echo "<legend>".$_questions[$number]["question"]."</legend>";
            echo "<div class='answers'>";
            foreach ($_questions[$number]["answers"] as $key => $value) {
                echo "<input type='radio' id='".$value['content']."' name='".$_name."' value='".$value['value']."' />
                <label for='".$value['content']."'>".$value['content']."</label>";
            }
            echo "</div>
            <button>Question suivante</button>
        </fieldset>";


        }

         
?>    



    

