<?php
 session_start();

 if(is_null($_SESSION["email"]))
 {
  header("Location: ../php/login.php");
 }
$user=$_SESSION["email"];
 $con=mysqli_connect("localhost","root","","blood");

 $select=mysqli_query($con, "SELECT * FROM register WHERE email='$user'");
  $data1 =mysqli_fetch_assoc($select); 

$name=htmlspecialchars($data1["name"]);
$bg=htmlspecialchars($data1["bg"]);
$email=htmlspecialchars($data1["email"]);
$number=htmlspecialchars($data1["number"]);
$dob=htmlspecialchars($data1["dob"]);
$address=htmlspecialchars($data1["address"]);
$mandal=htmlspecialchars($data1["mandal"]);
$district=htmlspecialchars($data1["district"]);
$state=htmlspecialchars($data1["state"]);
$country=htmlspecialchars($data1["country"]);
$pincode=htmlspecialchars($data1["pincode"]);
$password=htmlspecialchars($data1["password"]);
$status=htmlspecialchars($data1["status"]);


if($_SERVER["REQUEST_METHOD"]=="POST"){
     $name=htmlspecialchars($_POST["name"]);
    $bg=htmlspecialchars($_POST["bg"]);
    $email=htmlspecialchars($_POST["email"]);
    $number=htmlspecialchars($_POST["number"]);
    $dob=htmlspecialchars($_POST["dob"]);
    $address=htmlspecialchars($_POST["address"]);
    $mandal=htmlspecialchars($_POST["mandal"]);
    $district=htmlspecialchars($_POST["district"]);
    $state=htmlspecialchars($_POST["state"]);
    $country=htmlspecialchars($_POST["country"]);
    $pincode=htmlspecialchars($_POST["pincode"]);
    $password=htmlspecialchars($_POST["password"]);
    $status=htmlspecialchars($_POST["status"]);

$sql="UPDATE blood.register SET name='$name',bg='$bg',number='$number',dob='$dob',address='$address',mandal='$mandal',
district='$district',state='$state',country='$country',pincode='$pincode',password='$password',status='$status' where email='$user'";


if (mysqli_query($con, $sql))
{
    echo '<script type ="text/JavaScript">';  
                    echo 'alert("updated donor info successfully")';  
                    echo '</script>';
  header("Location: ./details.php");
} 
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>update details </title>
    <link rel="stylesheet" href="../css/register.css">
</head>
    <body>
        <div class="main">
            <div class="fbd">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"> 
                <div class="close"> 
                   <a href="./details.php">X</a>
                </div>
                <h3>Update Details</h3>
                    <div class="ho">
                        <div class="hol">
                            <label for="name">Name</label>
                                <input class="in" type="text" placeholder="name" id="Name" name="name" value="<?php echo $name;?>" required>
                        </div>
                         <div class="hor">  
                            <label for="bg">blood Group</label>
                            <select class="in" id="blood group" name="bg" required>
                                <option value="<?php echo $bg;?>"><?php echo $bg;?></option>
                                <option value="O +ve">O +ve</option>
                                <option value="O -ve">O -ve</option>
                                <option value="A +ve">A +ve</option>
                                <option value="A -ve">A -ve</option>
                                <option value="B +ve">B +ve</option>
                                <option value="B -ve">B -ve</option>
                                <option value="AB +ve">AB +ve</option>
                                <option value="AB -ve">AB -ve</option>
                              </select>
                        </div>
                    </div>   
                    <div class="ho">
                        <div class="hol">
                        <label for="email">E-mail</label>
                        <input class="in" type="email" placeholder="Email" id="User id" name="email" value="<?php echo $email;?>"required disabled>
                  </div>
                        <div class="hor">
                        <label for="number">Mobile</label>
                            <input class="in" type="text" placeholder="Number" id="Mobile"  minlength="10" maxlength="10" name="number" value="<?php echo $number;?>" required  >
    </div>
                    </div>
                    <div class="ho">
                        <div class="hol">
                            
                        <label for="dob">Date of Birth</label>
                            <input class="in" type="date" placeholder="Date Of Birth" id="DOB" name="dob" value="<?php echo $dob;?>" required>
                        </div>
                        <div class="hor">
                            
                        <label for="address">Address</label>
                            <input class="in" type="text" placeholder="dno,villagename" id="line1" name="address" value="<?php echo $address;?>" required>
                       
                            </div>
                    </div>
                     <div class="ho">
                        <div class="hol">
                        <label for="mandal"> Mandal</label>
                        <select class="in" title="mandal" name="mandal" required>
                                <option value="<?php echo $mandal;?>"><?php echo $mandal;?></option>
                                <option value="chittoor">chittoor</option>
                                <option value="penumur">penumur</option>
                                <option value="pakala">pakala</option>
                                <option value="gd nellore">gd nellore</option>
                                <option value="vedurukupam">vedurukupam</option>
                              </select>
                         </div>
                        <div class="hor">
                            
                        <label for="district">district</label>
                            <input class="in" type="text" placeholder="district" id="dist" name="district" value="<?php echo $district;?>" required>
                        </div>
                     </div> 
                     <div class="ho">   
                        <div class="hol">
                            
                        <label for="state">State</label>
                            <input class="in" type="text" placeholder="state" id="state" name="state" value="<?php echo $state;?>" required>
                           </div>
                        <div class="hor">
                            <label for="country">Country</label>
                            <input class="in" type="text" placeholder="Country" id="Country" name="country" value="<?php echo $country;?>" required>
                        </div>
                    </div>
                  <div class="ho">
                    <div class="hol">
                        
                    <label for="pincode">pincode</label>
                            <input class="in" type="text" placeholder="pincode" id="pin" maxlength="6" name="pincode" value="<?php echo $pincode;?>" required>
                    </div>
                    <div class="hor">
                        <label for="password">Password</label>
                        <input class="in" type="password" placeholder="Password" id="password" minlength="6" name="password" value="<?php echo $password;?>" required>
                     </div>
                </div>
                <div class="ho"><div class="hol">
                 
                <label for="donate"><h2>Are you willing to donate?</h2></label>
                     <input class="rad" type="radio" name="status" value="yes" <?php if($status=='yes'){echo 'checked';}?> required>yes
                    <input type="radio" name="status" value="no" <?php if($status=='no'){echo 'checked';}?> required>no
                    </div></div>
                
            
                   <div class="bu">
                    <button class="logn" type="submit">UPDATE</button>
                   </div>
                </form>
            </div>

        </div>
    </body>
</html>  

