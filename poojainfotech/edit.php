<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Edit Info</title>
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div>
        <form action="" method="post">
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
                        <center><input type="submit" value="Update"></center>
                    </td>
                    <td><button><a href="show.php"></a></button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>