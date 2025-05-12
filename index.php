<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <hgroup>
        <h1>Quiz de culture générale des champions</h1>
        <p>Exam Stephane Lay</p>
    </hgroup>
    <main>
        <form method="post">
            <fieldset>
            <legend>Qui est le guitariste des Guns'N'Roses? </legend>

            <div class="answers">
                <input type="radio" id="slash" name="singer" value="R" />
                <label for="slash">Slash</label>

                <input type="radio" id="Angus Young" name="singer" value="W" />
                <label for="Angus Young">Angus Young</label>

                <input type="radio" id="John Frusciante" name="singer" value="W" />
                <label for="John Frusciante">John Frusciante</label>

                <input type="radio" id="Jimmy Page" name="singer" value="W" />
                <label for="Jimmy Page">Jimmy Page</label>
            </div>
            <button>Question suivante</button>
        </fieldset>
</form>
    </main>
</body>
</html>

<?php
    if (isset($_POST["singer"])) {
        var_dump($_POST["singer"]);
        echo "<h2>". $_POST["singer"] ."</h2>";
    }
?>
