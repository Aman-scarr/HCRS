<?php
$host = "localhost";
$user ="root";
$password ="";
$database = "test_db"


<!$id = "";//
$fname = "";
$lname = "";
$age ="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect = mysqli_connect($host,$user,$password,$database);
 } catch (Exception $ex){

 echo 'Error';
    
}

?>
<!DOCTYPE Haml>
<html>
<head>
<title>PHP UPDATE</title>
</head>
<body>
          <from action="php_updat" methoded="post">
               <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
               <input type="text" name="fname" placeholder="First Name"value="<?php echo $fname;?>"><br><br>
               <input type="text" name="lname" placeholder="Last Name"value="<?php echo $lname;?>"><br><br>
               <input type="number" name="id" placeholder="Age"value="<?php echo $age;?>"><br><br>
             <div>
                 <input type="submit" name="update" value="Update">
                 
            </from>
        </body>
       </html> 
