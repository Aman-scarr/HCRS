<!DOCTYPE html>
<html style="background-color: #0dab7c">
    <heaad>
        <title> </title>
        <meta charset = "utf-8">
    </heaad>
    <body style="margin-left:500px">
    <h1 style="margin-left:-100px">Please Fill about the car you want to rent</h1><br>
        <form method="post" action = "posting.php" enctype="multipart/form-data">
            <fieldset style="width:200px;height:50px">
                <legend>name of car</legend>
                <select name="type_of_car">
                    <option value=''>corolla</option>
                    <option value=''>vitz</option>
                    <option value=''>dolphin</option>
                    <option value=''>hilux</option>
                    <option value=''>rav4</option>
                    <option value=''>hyundai</option>
                    <option value=''>CHR</option>
                </select>
            </fieldset><br>
            model:<br>
            <input type="txt" name="date_of_product" required><br><br>
            plate:<br>
            <input type="txt" name="plate_number" required><br><br>
            period:<br>
            <input type="txt" name="number_of_days" required><br><br>
            price/period:<br>
            <input type="txt" name="price_per_period" required><br><br>
            
            Photo of car:
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

