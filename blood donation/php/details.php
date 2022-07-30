<?php
  session_start();

  if(is_null($_SESSION["email"]))
  {
   header("Location: ../php/login.php");
  }
  $user=$_SESSION["email"];
  $connect=mysqli_connect("localhost", "root", "", "blood");
  $select=mysqli_query($connect, "SELECT * FROM register WHERE email='$user'");
  $data1 =mysqli_fetch_assoc($select); 

  
$name=$data1["name"];
$bg=$data1["bg"];
$email=$data1["email"];
$number=$data1["number"];
$dob=$data1["dob"];
$address=$data1["address"];
$mandal=$data1["mandal"];
$district=$data1["district"];
$state=$data1["state"];
$country=$data1["country"];
$pincode=$data1["pincode"];
$password=$data1["password"];
$status=$data1["status"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/details.css">
    <title>user details</title>
</head>
<body>
<div class="main">
       <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="close"> 
                   <a href="../php/login.php">X</a>
                </div>
                    <h3 >profile details</h3><br><br>
                <table id="customers" align="center" border="2px">
                    <tr>
                       <td>name</td>
                       <td><?php echo $name;?></td>
                    </tr>
                    <tr>
                        <td>blood group</td>
                        <td><?php echo $bg; ?></td>              
                    </tr>
                    <tr>
                        <td>date of birth</td>
                        <td><?php echo $dob; ?></td>
                    </tr>
                    <tr>
                        <td>mobile</td>
                        <td><?php echo $number; ?></td>
                    </tr>
                    <tr>
                        <td>address</td>
                        <td><?php echo $address; ?></td>
                    </tr>
                   
                    <tr>
                        <td>mandal</td>
                        <td><?php echo $mandal; ?></td>
                    </tr>
                    <tr>
                        <td>district</td>
                        <td><?php echo $district; ?></td>
                    </tr>
                    <tr>
                        <td>state</td>
                        <td><?php echo $state; ?></td>
                    </tr>
                    <tr>
                        <td>country</td>
                        <td><?php echo $country; ?></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><?php echo $password;?></td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td><?php echo $status;?></td>
                    </tr>
            </table>
                <div class="container">
                    <div class="item"><button class="logn" type="submit"><a href="./update.php">edit profile</a></button> </div>
                    <div class="item"><button class="logn" type="submit"><a href="./delete.php">delete profile</a></button></div>
                    <div class="item"><button class="logn" type="submit"><a href="./logout.php">logout</a></button></div>
                 </div>
            </form>
         </div>
    </body>
</html>