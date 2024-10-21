<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE266</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-one text-center">
        <div class="row">
            <div class="col">
                <h1>CAROLINE WARNER</h1>
            </div>
        </div>
        <div class="row nav">
            <div class="col">
                <button class="btn btn-secondary" type="button">
                    <a href="https://github.com/carolinewarner22/cwarner-php.git" target="_blank">SE266 REPO</a>
                </button>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        WEEKS
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="w1/index.php" target="_blank">Week 1</a></li>
                        <li><a class="dropdown-item" href="w2/lab/index.php" target="_blank">Week 2</a></li>
                        <li><a class="dropdown-item" href="w3/lab/atm.php" target="_blank">Week 3</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 4</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 5</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 6</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 7</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 8</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 9</a></li>
                        <li><a class="dropdown-item" href="#" target="_blank">Week 10</a></li>
                    </ul>

                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LEARN PHP
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://phptherightway.com/" target="_blank">PHP: The Right Way</a></li>
                        <li><a class="dropdown-item" href="https://www.w3schools.com/php/" target="_blank">W3 Schools</a></li>
                        <li><a class="dropdown-item" href="https://www.phptutorial.net/" target="_blank">PHP Tutorial</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        LEARN GIT
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://docs.github.com/en/get-started/using-git" target="_blank">GitHub Docs</a></li>
                        <li><a class="dropdown-item" href="https://www.w3schools.com/git/" target="_blank">W3 Schools</a></li>
                        <li><a class="dropdown-item" href="https://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide" target="_blank">Stack Overflow</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="body">
        <h2>SE266 - Web Dev. using PHP & MySQL</h2>
        <h3>Link to my <a href="https://github.com/carolinewarner22/cwarner-php.git" target="_blank">Repository</a></h3>
        <br />
        <p>Welcome to my web page! More coming soon...</p>
        <br />
        <p>Stuff I like to do:</p>
        <ul>
            <li>
                <a href="https://playvalorant.com/en-us/?utm_medium=card2%2Bwww.riotgames.com&utm_source=riotbar" target="_blank">VALORANT</a>
            </li>
            <li>
                <a href="https://create.roblox.com/" target="_blank">ROBLOX Creator Hub</a>
            </li>
            <li>
                <a href="https://www.counter-strike.net/cs2" target="_blank">Counter-Strike 2</a>
            </li>
        </ul>
    </div>
    <div class="footer text-center">
    <?php
        date_default_timezone_set("America/New_York");
        $file = basename($_SERVER['PHP_SELF']);
        $mod_date = date("F d, Y @ h:i A", filemtime($file));
        echo "WEB PAGE LAST UPDATED: $mod_date ";
    ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>