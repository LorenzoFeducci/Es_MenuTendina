<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film = array("titanic", "avatar", "star wars", "Spiderman", "the avengers");

        echo "<select name='filmpreferito'>";
            $i = 1;
            foreach($film as $elementi){
                echo "<option value='f$i'>$elementi</option>";
                $i++;
            }
        echo "</select>";
    ?>
</body>
</html>