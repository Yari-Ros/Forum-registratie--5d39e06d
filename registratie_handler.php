<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
</head>
<body>
    <h1>Form registration</h1>
    <?php
    $request = $_REQUEST;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($request as $field => $value) {
            echo('<p>' . 'Your ' . $field . ' is ' . $value . '</p>');
        }
    } else {
        echo('<h1>The request is invalid.</h1>');
    }
    ?>
</body>
</html>