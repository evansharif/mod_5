<?php

require_once "function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $person->setName($_POST['name']);
    $person->setEmail($_POST['email']);
    $name = $person->getName();
    $email = $person->getEmail();
} else {
    $name = "";
    $email = "";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 05</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>

    <section>
        
        <div class="wrapper">
            <h2 class="question-title">Mod : 5 (Assignment)</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div>
                    <label for="name"> Name</label><br>
                    <input type="text" name="name" required><br>
                </div>
                <div>
                    <label for="email">Email </label><br>
                    <input type="email" name="email" required><br>
                </div><br>
                <div>
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
        <div>
            <h2>*********************</h2>
            <p>Name: <?php echo $personName; ?></p>
            <p>Email: <?php echo $personEmail; ?></p>
        </div>
        <div >
            <h2>*********************</h2>
            <p>Name: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
        </div>
    </section>
</body>

</html>