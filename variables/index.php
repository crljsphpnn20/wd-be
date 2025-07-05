<?php
    $name = "Carl Joseph Poonin";
    $age = 19;
    $gender = "male";
    $address = "Natatas Tanauan City Batangas";
    $school = "Polytechnic University of Sto. Tomas Campus";
    $weight = 65.15;
    $height = 180.45;

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP | <?php echo($name) ?></title>
    <link rel="shortcut icon" href="../images/mylogo.png" type="png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="">

</head>

<body>

    <div class="container-fluid min-vh-100 bg-dark text-white">
        <div class="row bg-info py-5">
            <div class="col-12">
                <div class="display-3 text-center">Personal Information</div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-8 mx-auto">
                <div class="card p-5 rounded-5 shadow">
                    <div class="display-6 my-3">
                      <strong class="text-primary">Name: </strong> <?php echo($name) ?>
                    </div>
                    <div class="display-6 my-3">
                      <strong class="text-primary">Age: </strong> <?php echo($age) ?>
                    </div>
                    <div class="display-6 my-3">
                      <strong class="text-primary">Gender: </strong> <?php echo($gender) ?>
                    </div>
                    <div class="display-6 my-3">
                      <strong class="text-primary">Address: </strong> <?php echo($address) ?>
                    </div>
                    <div class="display-6 my-3">
                      <strong class="text-primary">School: </strong> <?php echo($school) ?>
                    </div>
                    <div class="display-6 my-3">
                      <strong class="text-primary">Weight: </strong> <?php echo($weight) ?> kg
                    </div>
                    <div class="display-6 my-3">
                      <strong class="text-primary">Height: </strong> <?php echo($height) ?> cm
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>