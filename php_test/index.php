<?php

$name = $_POST['f_name'];
$ph_num = $_POST['ph_number'];
$em = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h1 align="center">Contact Form</h1>
        <table align="center">
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="f_name"></td>
            </tr>
            <tr>
                <?php
                if (!preg_match("/^[0-9]*$/", $ph_num)) {
                    print "invalid phone number";
                }
                ?>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="tel" name="ph_number"></td>

            </tr>
            <tr>
                <?php
                if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                    print "invalid name";
                }
                ?>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><textarea name="message" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>