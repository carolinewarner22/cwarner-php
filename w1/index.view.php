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
        <h2>
            Task C - Basic PHP and Arrays
        </h2>
        <ul>
                <?php
                    //foreach loops through the array and temp assigns the current index to $animal so it can be displayed one at a time
                    foreach ($animals as $animal){
                        echo "<li>$animal</li>";
                    }
                ?>
        </ul>
        <h2>
            Task D - Associative Arrays
        </h2>
        <ul>

            
            <?php
            //foreach loops through array, temp assigns current index to $desc and $value and displays on page as "Description: Value"
            foreach ($task as $description => $value) : ?>
                <li><strong><?= $description; ?></strong>: <?= $value; ?>
                <?php endforeach; ?> 
        </ul>
        <h2>
            Task E - Booleans and Conditionals
        </h2>
        <ul>
            <li>
                <strong>Name: </strong><?= $task2['title']; ?> <!-- code grabs the value associated w 'title' and displays it !-->
                </li>
                <li>
                    <strong>Perform By: </strong><?= $task2['due']; ?>
                </li>
                <li>
                    <strong>Person Responsible: </strong><?= $task2['assigned_to']; ?>
                </li>
                <li>
                    <strong>Completed? </strong>

                    <!-- if value of key 'completed' = TRUE... display checkmark-->

                    <?php if ($task2['completed']) : ?>
                        <span class="icon">&#9989;</span>

                    <!--if value of key 'completed' = FALSE... display x-->
                    <?php else : ?>
                        <span class="icon">&#10060;</span>
                    <?php endif; ?>                    
                </li>
        </ul>
        <h2>
            Task F - Functions
        </h2>
            <!--if the value of key 'age' is greater than or equal to 21... display a <p> tag including value of key 'name' that says person can come in!-->
            <?php if ($person["age"] >= 21): ?>
            <p>
                <?php echo $person['name']; ?> can come in!
            </p>

            <!--if the value is less than 21... display name and tell user the person cannot come in!-->
            <?php else: ?>
            <p>
                <?php echo $person['name']; ?> can't come in.
            </p>
            <?php endif; ?>
        <h2>
            Task G - Functions
        </h2>
        <?php
        function fizzBuzz($num) {
                //if number has a remainder of zero when divided by both 2 and divided by 3... return 'fizz buzz'

                if ($num % 2 == 0 && $num % 3 == 0) {
                    return "Fizz Buzz";

                    //if remainder is 0 when number is divided by 2
                } elseif ($num % 2 == 0) {
                    return "Fizz";
                    //if remainder is 0 when number is divided by 2
                } elseif ($num % 3 == 0) {
                    return "Buzz";
                    //if number cannot be divided by 2 and 3 evenly.. just display the number
                } else {
                    return $num;
                }
            }

            //number starts at one, ends at 100.. adding one to count each time it loops and add a <br> tag
            for ($i = 1; $i <= 100; $i++) {
                echo fizzBuzz($i) . "<br>";
            }

            ?>
</body>
</html>