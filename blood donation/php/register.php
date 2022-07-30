<?php

$status="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

$con=mysqli_connect("localhost","root","","blood");

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

$duplicate=mysqli_query($con,"select email from register where email='$email';");
$dup=mysqli_fetch_assoc($duplicate);
if($dup['email']==$email){
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Already someone created with this mail,try again with other mail")';  
    echo '</script>'; 

}else{
$sql="INSERT INTO blood.register (name, bg,email,number,dob,address,mandal,district,state,country,pincode,password,status)  VALUES ('$name','$bg','$email','$number','$dob',
'$address','$mandal','$district','$state','$country','$pincode','$password','$status')";


if (mysqli_query($con, $sql))
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Account created")';  
    echo '</script>'; 
     header("location:../php/login.php");
    }else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
    <link rel="stylesheet" href="../css/register.css">
</head>
    <body>
        <div class="main">
            <div class="fbd">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST"> 
               <div class="close"> 
                   <a href="../php/login.php">X</a>
                </div>
                    <h3> Register To Donate Blood</h3>
                    <div class="ho">
                        <div class="hol">
                            <label for="name">Name</label>
                                <input class="in" type="text" placeholder="name" id="Name" name="name" required>
                        </div>
                         <div class="hor">  
                            <label for="bg">blood Group</label>
                            <select class="in" title="blood group" name="bg" required>
                                <option value="select">select</option>
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
                        <input class="in" type="email" placeholder="Email" id="User id" name="email" required>
                    </div>
                        <div class="hor">
                            <label for="number">Mobile</label>
                            <input class="in" type="text" placeholder="Number" id="Mobile" minlength="10" maxlength="10" name="number" required>
                        </div>
                    </div>
                        <div class="ho">
                        <div class="hol">
                            <label for="dob">Date of Birth</label>
                            <input class="in" type="date" placeholder="Date Of Birth" id="DOB" name="dob" required>
                        </div>
                        <div class="hor">
                            <label for="address">Address</label>
                            <input class="in" type="text" placeholder="dno,villagename" id="line1" name="address" required>
                        </div>
                        </div>
                        <div class="ho">
                        <div class="hol">
                            <label for="mandal"> Mandal</label>
                            <select class="in" title="mandal" name="mandal" required>
                                <option value="select">select</option>
                                <option value="chittoor">chittoor</option>
                                <option value="penumur">penumur</option>
                                <option value="pakala">pakala</option>
                                <option value="gd nellore">gd nellore</option>
                                <option value="vedurukupam">vedurukupam</option>
                              </select>
                         </div>
                        <div class="hor">
                            <label for="district">district</label>
                            <input class="in" type="text" placeholder="district" id="dist" name="district" value="chittoor" required>
                        </div>
                        </div>
                        <div class="ho">
                        <div class="hol">
                            <label for="state">State</label>
                            <input class="in" type="text" placeholder="state" id="state" name="state" value="Andra Pradesh" required>
                        </div>
                        <div class="hor">
                            <label for="pincode">pincode</label>
                            <input class="in" type="text" placeholder="pincode" id="pin" maxlength="6" name="pincode" required>
                        </div>
                        </div>
                        <div class="ho">
                        <div class="hol">
                            <label for="country">Country</label>
                            <input class="in" type="text" placeholder="Country" id="Country" name="country" value="India"required>
                        </div>
                    <div class="hor">
                        <label for="password">Password</label>
                        <input class="in" type="password" placeholder="Password" id="password" minlength="6" name="password" required>
                      </div>         
                   
                  </div>
                  <div class="ho">
                  <div class="hol">
                  <label for="donation date">Last Donated Date</label>
                    <input type="date" class="in" name="lastdate" placeholder="" required>
               
                  </div>
                  <div class="hor">
                  <label><h2>Are you willing to donate?</h2></label>
                     <input  type="radio" name="status" value="yes" required>yes
                    <input  type="radio" name="status" value="no" required >no
                      </div>
                </div>
                
            
                   <div class="bu">
                    <button class="logn" type="submit">Register</button>
                   </div>
                </form>
            </div>

        </div>
    </body>
</html>  

