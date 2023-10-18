<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
        }
        table {
            width: 100%;
            height: auto;
            border-collapse:separate;
            margin: 0;
           
        }

        th {
            background-color: gray;
            padding: 15px
        }

        td {
            text-align: center;
            padding: 6px;
            background-color: lightgray
        }

        .del_btn,
        .edit_btn {
            display: flex;
            width: 55%;
            border-radius: 5px;
            padding: 8px;
            
        }
        a{
            text-decoration: none;
            color:black;
            text-align: center;
        }
    </style>
</head>

<body>


    <form action="">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Query</th>
                <th>Operations</th>
            </tr>

            <!-- <tr>
                <td>1</td>
                <td>Hemang Thakkar</td>
                <td>hemangthakkar2801@gmail.com</td>
                <td>7990391513</td>
                <td>test</td>
                <td><button type="submit">Delete</button></td>
            </tr> -->
            <?php
            include('conn.php');
            error_reporting(0);
            $read = "SELECT * FROM registration";
            $data = mysqli_query($conn, $read);
            if (mysqli_num_rows($data) > 0) {
                while ($row = mysqli_fetch_assoc($data)) {
            ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td><?php echo $row['query'] ?></td>

                        <input type="hidden" name="del_id" class="del_id">
                        <td>
                            <button type="submit" name="edit_btn" class="edit_btn">Edit</button>
                            <?php echo "<button class='del_btn'><a href='askdelete.php? i=$row[id]' onclick='return checkdelet()'>Delete</a></button";?>
                        </td>
                    </tr>
            <?php
                }
            } else {
                // echo "Found No Data";
            }
            ?>
        </table>
<script>
    // popup confirmation for deleting records
    function checkdelet(){
        return confirm('Are you sure to delete this data?');
    }
</script>
    </form>
</body>

</html>