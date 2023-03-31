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
                <tr>
                    <td>Clg_Id</td>
                    <td>Clg_Id</td>
                    <td>Course</td>
                    <td>Fees</td>
                </tr>
                <?php 

                    $con=mysqli_connect("localhost","root","","practical");
                    $q="select* from clg";
                    $res=mysqli_query($con,$q);
                
                while($row=mysqli_fetch_array($res))
                {?>
                    <tr>
                        <td><?php echo $row['Clg_Id']; ?></td>
                        <td><?php echo $row['Clg_Name']; ?></td>
                        <td><?php echo $row['Course']; ?></td>
                        <td><?php echo $row['Fees']; ?></td>
                    </tr>
                 <?php } ?>   
            </table>
        </div>
    </div>    
<div class="footer">
    <h1>|All Rights Reserved By Prince@Os Act2022|</h1>
</div>
</body>
</html>