<!DOCTYPE html>
<html style="background-color: #0dab7c">
    <heaad>
        <title> </title>
        <meta charset = "utf-8">
    </heaad>
    <body style="margin-left:500px">
    <h1 style="margin-left:-100px">Please Fill about the house you want to rent</h1><br>
        <form method="post" action = "posting.php" enctype="multipart/form-data">
           
            location:<br>
            <input type="txt" name="location_of_house" required><br><br>
            house_no:<br>
            <input type="txt" name="house_no" required><br><br>
            <fieldset style="width:200px;height:50px">
                <legend>method</legend>
                <select name="type_of_rent">
                  <option value=''>monthly</option>
                  <option value=''>3month</option>
                  <option value=''>6month</option>
                  <option value=''>yearly</option>
            period:<br>
            <input type="txt" name="number_of_days" required><br><br>
            Description of house:<br>
            <textarea  name="description" rows="10" cols="25" required></textarea><br><br>
            price/period:<br>
            <input type="txt" name="price_per_period" required><br><br>
            
            Photo of house:
            <input type="file" name="image" required><br><br>
            
            <input type="submit" name="submit" value="submit">
            <button><a href="home.html">Back</a></button>
        </form>
    </body>
</html>

<?php 
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hacross";

$conn = new mysqli($server,$username,$password,$dbname);
if($conn!=TRUE)
echo "error:".$conn->connect_error;

   if(isset($_POST["submit"]))
   {
       $type = $_POST['car'];
       $car_name = $_POST['cartype'];
       $car_model = $_POST['model'];
       $price = $_POST['price'];

       
       $file_name = $_FILES['image']['name'];
       $location = "images/$type/";
       $tempname = $_FILES['image']['tmp_name'];
       $target_file = $location.basename($file_name);
         
       $sql = "INSERT INTO $type(car, cartype, model, price) 
               VALUES('$car_name', '$car_model', '$file_name', '$price')";
        $store = $conn->query($sql);
        if($store!=TRUE)
           echo "error".$conn->error;
           else
           echo "<h3 style='color:red'>Posted Successfully!</h3><br>";

       if(!empty($file_name))
       {
           $save = move_uploaded_file($tempname, $target_file);
       }
   }
  
?>

