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
function getpost()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['age'];
    return $posts;
}

//search
if(isset($_POST['search']))
{
    $data = getposts();

    $search_Query = "SELECT * FROM users WHERE id = $data[0]";
    $search_Result = mysquli_query($connect, $search_Query);
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysquli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $age = $row['age'];
    
    
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';

    }
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
               <input type="number" name="age" placeholder="Age"value="<?php echo $age;?>"><br><br>
             <div>
                 <input type="submit" name="insert" value="Add">
                 <input type="submit" name="update" value="Update">
                 <input type="submit" name="delete" value="Delete">
                 <input type="submit" name="search" value="Find">
                 
            </from>
        </body>
       </html> 
