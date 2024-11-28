<?php

    require "Form.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $form = new Form($_POST);
        $errors = $form->validate();

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
            <form method="post" action="">
                <div class="mb-3">
                    <label for="forusername" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="forusername">
                    <div id="emailHelp" class="form-text text-danger"><?= $errors['username'] ?? '' ?></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text text-danger"><?= $errors['email'] ?? '' ?></div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>