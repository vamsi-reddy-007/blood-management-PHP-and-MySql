<?php
$result="";
  if($_SERVER["REQUEST_METHOD"]== "POST"){
    session_start();
    $conn=mysqli_connect("localhost", "root", "", "blood");

    $bg=htmlspecialchars($_POST["blood"]);
    $mandal=htmlspecialchars($_POST["mandal"]);

    if(empty($bg) or empty($mandal)){
        echo '<script type ="text/JavaScript">';  
        echo 'alert("make sure that blood group and mandal is selected")';  
        echo '</script>';  
    }else{
         $status='yes';
         $result=mysqli_query($conn,"select name,address,email,number from blood.register where bg='$bg' and mandal='$mandal'and status='$status';");
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/list.css">
    <title>Document</title>
</head>
<body>
    <div class="list">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="close"> 
                   <a href="../index.html">X</a>
              </div>
            <p> Blood Group:<select class="in" id="blood group" name="blood">
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
          
        Mandal:  <select class="in" title="mandal" name="mandal" required>
                                <option value="select">select</option>
                                <option value="chittoor">chittoor</option>
                                <option value="penumur">penumur</option>
                                <option value="pakala">pakala</option>
                                <option value="gd nellore">gd nellore</option>
                                <option value="vedurukupam">vedurukupam</option>
                              </select> <button class="logn">search</button>
        </p>
        <br>
    </form>
    
</div>
<div class="donars">
    <table id="donars" border="2px">
        <?php
        if($result==""){
          die;
            
        }elseif($result->num_rows>0){ 
             
        ?>
            <tr><h2>list of Donors:-<br></h2></tr>
            <tr>
            <th>name</th>
            <th>address</th>
            <th>email</th>
            <th>mobile</th>
        </tr>
       <?php }
        ?>
        <tbody>
        <?php 

        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
        ?>
     
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['number'];?></td>
        </tr>

     <?php
            }
        }else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("no results found, try with near by Mandal")';  
            echo '</script>'; 
        }
        
        ?>
   
    </tbody>
    </table>
    
</div>
        
</body>
</html>
