<?php include 'includes/header.php';

include 'functions.php';

var_dump($_POST);

$teamName = '';
$wins = '';
$losses = '';
$otLosses = '';
$error = '';

if(filter_input(INPUT_POST, 'team_name') != ''){
    $teamName = filter_input(INPUT_POST, 'team_name');
}
else{
    $error .= 'team name must be filed in <br/>';
}


if(filter_input(INPUT_POST, 'wins', FILTER_VALIDATE_FLOAT)){
    $wins = filter_input(INPUT_POST, 'wins', FILTER_VALIDATE_FLOAT);
}
else{
    $error .= 'wins is not valid number <br/>';
}

if(filter_input(INPUT_POST, 'losses', FILTER_VALIDATE_FLOAT)){
    $losses = filter_input(INPUT_POST, 'losses', FILTER_VALIDATE_FLOAT);
}
else{
    $error .= 'losses is not valid number <br/>';
}

if(filter_input(INPUT_POST, 'ot_losses', FILTER_VALIDATE_FLOAT)){
    $otLosses = filter_input(INPUT_POST, 'ot_losses', FILTER_VALIDATE_FLOAT);
}
else{
    $error .= 'ot losses is not valid number <br/>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W2 Demo</title>
</head>
<body>
<h1>nhl standings</h1>

<h2>criteria</h2>
<ul>
    <li>win = 2 pts</li>
    <li>loss = 0 pts</li>
    <li>ot loss = 1 pt</li>
</ul>

<div class="form-wrapper">
    <form name="nhl_standings" method="post">
        <div class="form-control">
            <label for="team_name">Team Name:</label><br />
            <input type="text" id="team_name" name="team_name" value="<?= $teamName; ?>">
        </div>

        <div class="form-control">
            <label for="wins">Wins:</label><br />
            <input type="text" id="wins" name="wins" value="<?= $wins; ?>">
        </div>

        <div class="form-control">
            <label for="losses">Losses:</label><br />
            <input type="text" id="losses" name="losses" value="<?= $losses; ?>">
        </div>

        <div class="form-control">
            <label for="ot_losses">OT Losses:</label><br />
            <input type="text" id="ot_losses" name="ot_losses" value="<?= $otLosses; ?>">
        </div>
        <div class="form-control">
            <input type="submit" id="submit" name="submit">
        </div>
    </form>

    <div>
        <p style="color: red;"><?= $error; ?></p>
        <h2>results</h2>
        <p>team name: </p><?= $teamName; ?>
        <p>wins: </p><?= $wins; ?>
        <p>losses: </p><?= $losses; ?>
        <p>ot losses: </p><?= $otLosses; ?>


        <p>total points: </p><?= calcPoints($wins, $otLosses); ?>
    </div>
</div>
</body>
</html>

