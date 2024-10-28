<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W4 Lab</title>
</head>
<body>
    <div>
        <h1>Patients: </h1>
    </div>
    <div>
        <a href="add_patients.php">Add Patient</a>
    </div>
    

    <?php
        include __DIR__ . '/models/model_patients.php';

        $pa = getPatients();



    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name </th>
                <th>Last Name</th>
                <th>Martial Status</th>
                <th>Birth Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pa as $p): ?>
                <tr>
                    <td>
                        <?= $p['id']; ?>
                    </td>
                    <td>
                        <?= $p['patientFirstName']; ?>
                    </td>
                    <td>
                        <?= $p['patientLastName']; ?> 
                    </td>
                    <td>
                        <?= $p['patientMarried']; ?>
                    </td>
                    <td>
                        <?= $p['patientBirthDate']; ?>
                    </td>
                </tr>
            <?php endforeach ?>
            
        </tbody>
    </table>
    
</body>
</html>