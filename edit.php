<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>


    <?php
    include('conn.php');
    error_reporting(0);
    if (isset($_POST['edit_btn'])) {
        $id = $_POST['edit_ids'];

        $fetch = "SELECT * FROM registration where id='$id' ";
        $runn = mysqli_query($conn, $fetch);



        if (mysqli_num_rows($runn) > 0) {
            while ($row = mysqli_fetch_assoc($runn)) {

    ?>
                <form action="update.php" method="post">
                    <table>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <h1>Registration</h1>
                                </center>
                            </td>
                        </tr>
                        <tr>

                            <input type="text" value="<?php echo $row['id'] ?>" name="edit_id">

                            <td colspan="2"><input type="text" name="edit_name" value="<?php echo $row['namee'] ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="email" name="edit_email" id="email" value="<?php echo $row['email'] ?>"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="text" name="edit_number" id="number" value="<?php echo $row['contact'] ?>"></td>
                        </tr>

                        <tr>
                            <td>
                                <button type="submit" name="updatebtn">Update</button>
                            </td>
                            <td><a href="show.php">Cancel</a></td>
                        </tr>
                    </table>
                </form>
    <?php
            }
        }
    }
    ?>
</body>

</html>