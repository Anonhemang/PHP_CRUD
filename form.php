<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Registration</title>
    <style>
        * {
            margin: 0;
        }

        .form {
            margin-left: 40%;
            padding: 2px;
            /* margin-right: 30%; */

        }

        td {
            margin-left: 40%;
            margin-right: 40%;
            padding: 5px;
        }


        input {
            padding: 8px;
            padding-left: 5px;
            width: 100%;
        }

        @media screen and (max-width: 800px) {
            .form {
                width: 80%;
                height: 90%;
                margin-top: 10%;
                margin-left: 10%;
            }

        }
    </style>
</head>

<body>
    <div class="all">
        <div class="form">
            <form method="get">
                <table>
                    <tr>
                        <td colspan="2">
                            <center>
                                <h1>Registration</h1>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="name" placeholder="Enter Your Name"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="email" id="email" placeholder="Enter Your Email"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="number" id="number" placeholder="Enter Your Contact Number"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="Query" id="" cols="30" rows="10" placeholder="Enter Query"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="image" src="images/" alt="" name="pics"></td>
                    </tr>
                    <tr>
                        <td>
                            <center><input type="submit" value="Submit"></center>
                        </td>
                        <td><input type="reset" value="Reset"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>



<?php
session_start();
error_reporting(0);
include('conn.php');
$id = $_GET['id'];
$name = $_GET['name'];
$email = $_GET['email'];
$contact = $_GET['number'];
$que = $_GET['Query'];
$pics = $_GET['pics'];


$query = "insert into `registration` values ('','$name','$email', '$contact', '$que', '$pics')";

$data = mysqli_query($conn, $query);
session_destroy();
?>