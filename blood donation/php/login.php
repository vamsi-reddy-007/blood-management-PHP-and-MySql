<?php

     if($_SERVER["REQUEST_METHOD"]== "POST"){
        session_start();
        $conn=mysqli_connect("localhost", "root", "", "blood");

        $email= htmlspecialchars($_POST["email"]);
        $password=htmlspecialchars($_POST["password"]);
                 
                
        if(empty ($email) or empty($password)){
            echo '<script type ="text/JavaScript">';  
            echo 'alert("invalid mail id/password...")';  
            echo '</script>';  
         }else{
            $query=mysqli_query($conn, "SELECT email, password FROM register WHERE email='$email';");
            $data =mysqli_fetch_assoc($query);

            if(is_null($data["email"])){
                echo '<script type ="text/JavaScript">';  
                echo 'alert("Username doesnot exist!.")';  
                echo '</script>'; 
        
                header("location:./register.php");
             }else{
                  if($password==$data["password"]){
                   session_start();
                   $_SESSION["email"]=$email;
                   header("location: ./details.php");
                  }else{
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("password is not correct")';  
                    echo '</script>';
                }
             }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>login</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="main">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="close"> 
                   <a href="../index.html">X</a>
                   </div>
                    <h3 >Login Here</h3>
                   
            
                    <label for="email">Email-id</label>
                    <input class="in" type="text" placeholder="Email" name="email">
            
                    <label for="password">Password</label>
                    <input class="in" type="password" placeholder="Password" name="password">
            
                    <button class="logn">Log In</button>
                    <button class="logn"><a href="./register.php">New Donor</a></button>
                </form>
          
        </div>
    
</body>
</html>  