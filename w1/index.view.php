<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?php                 
                $name = htmlspecialchars(isset($_GET['name']) ? $_GET['name'] : 'You!');                
                $greeting = 'Hello';
                echo $greeting . ', ' . $name;
            ?>
        </h1>
    </header>

    <ul>
                <?php
                    //foreach loops through the array and temp assigns the current index to $animal so it can be displayed one at a time
                    foreach ($animals as $animal){
                        echo "<li>$animal</li>";
                    }
                ?>
            </ul>
</body>
</html>