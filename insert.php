<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <h1>|College Management System|</h1>
    
    <div class="links">
        <a href="practical.php">Home</a>
        <a href="insert.php">Insert</a>
        <a href="select.php">Display</a>
    </div>
    </div>
    <div class="mid">
        <div class="tbl">
        <table border="2" cellspacing="0" cellpadding="5">
        <form action="" method="POST">
            <tr>
                <td>Clg_Id</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Clg_Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Course</td>
                <td>
                    <select name="course">
                        <option>BBA</option>
                        <option>BCA</option>
                        <option>Bsc</option>
                        <option>BCOM</option>
                        <option>BA</option>
                    </select>    
                    </td>
            </tr>
            <tr>
                <td>Fees</td>
                <td><input type="text" name="fees"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" name="submit"></td>
            </tr>
        </form>
        </table>
        </div>
    </div>    
<div class="footer">
    <h1>|All Rights Reserved By Prince@Os Act2022|</h1>
</div>
<?php 
    if(isset($_POST['submit']))
    {
        extract($_POST);
        $con=mysqli_connect("localhost","root","","practical");
        $q="INSERT INTO `practical`.`clg` (`Clg_Id`, `Clg_Name`, `Course`, `Fees`) VALUES ('$id', '$name', '$course', '$fees')";
        $res=mysqli_query($con,$q);
    }
?>
</body>
</html>