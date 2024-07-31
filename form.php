<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>
    <?php
    // get value of error variable
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
    } else {
        $error = "";
    }
    //set error message
    $message = "";
    if ($error == "variable_not_set") {
        $message = "You must access this page from form.php";
    } else if ($error == "name_empty") {
        $message = "Name must be filled";
    } else if ($error == "email_empty") {
        $message = "Email must be filled";
    }
    //ccheck form
    if (isset($_GET["name"]) and isset($_GET["email"]) and isset($_GET["comment"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $phone = $_GET["phone"];
    } else {
        $name = "";
        $email = "";
        $phone = "";
    }
    ?>
    <span class="error"><?php echo $message; ?></span>
    <table>
        <form method="get" action="required.php">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="send" value="Send"></td>
            </tr>
        </form>
    </table>

</body>

</html>