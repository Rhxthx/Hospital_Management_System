<?php include("connection.php");?>
<?php
if(isset($_POST['book'])){
    $fname=$_POST['fname'];
    $page=$_POST['page'];
$dname=$_POST['dname'];
$aptime=$_POST['aptime'];
$cityname=$_POST['cityname'];
$addname=$_POST['addname'];
$mobno=$_POST['mobno'];
 $query="INSERT INTO FORM VALUES('$fname','$page','$dname','$aptime','$cityname','$addname','$mobno')";
 $data=mysqli_query($conn,$query);
if($data){
    echo "Data inserted into database";
}
else{
    echo "failed";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP crud operations</title>
    <link rel="stylesheet" type="text/css" href= style.css>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form action="#" method="POST">
        <div class="container-fluid"><h1 class="heading">Book your appointment with best hospital in Jaipur</h1></div>
        <div class="form-control">
            <label>Enter your name</label>
            <input type="text" placeholder="Enter your name" name="fname"required class="name">
        </div>
        <div class="form-control">
            <label> patient's age</label>
            <input type="number" placeholder="Enter patient's age"name="page"required class="age">
        </div>
        <div class="form-control">
            <label>Select the doctor-</label>
            <select class="form-select1" name="dname">
                <option value="select">select</option>
                <option value="Radhe Shayam Gupta">Radhe Shayam Gupta</option>
                <option value="Vijaya Jain">Vijaya Jain</option>
                <option value="Anuj Purohit">Anuj Purohit</option>
                <option value="Deepshikha Khandelwal">Deepshikha Khandelwal</option>
                <option value="Nikhil Rajawat">Nikhil Rajawat</option>
                <option value="Preeti Sharma">Preeti Sharma </option>
                <option value="Amita Bhardwaj">Amita Bhardwaj</option>
                <option value="Shikha Saini">Shikha Saini</option>
              </select>
        </div>
<div class="form-control">
    <label>Enter the time of appointment</label>
    <input type="time" name="aptime"required value="12:00" class="app">
</div>
<div class="form-control">
    <label>Select the city-</label>
    <select class="form-select2" name="cityname">
        <option value="select">select</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Jodhpur">Jodhpur</option>
        <option value="Udaipur">Udaipur</option>
        <option value="Alwar">Alwar</option>
        <option value="Ajmer">Ajmer</option>
        <option value="Dosa">Dosa</option>
        <option value="Jaisalmer">Jaisalmer</option>
        <option value="Pushkar">Pushkar</option>
      </select>
</div>
<div class="form-control">
    <label>Enter your Address</label>
    <input type="text" placeholder="Enter your address " name="addname" required class="add">
</div>
<div class="form-control">
    <label> Enter mobile number</label>
    <input type="text" placeholder="Enter contact number"name="mobno"required class="mob">
</div>

  <div class="input_field_terms">
    <label class="check">
        <input type="checkbox">
        <span class="checkmark"></span>
    </label>
    <p>Agree to terms and conditions</p>
</div>
<div class="d-grid">
    <input type="submit" class="btn btn-primary btn-block" name="book">Book</button>
    <br>
    <br>
  </div>
    </form>
    
</body>
</html> 
</body>
</html>