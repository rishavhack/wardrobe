<html ng-app="myapp">
<head>
  <script src="angular.js"></script>
    <script src="angular-route.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="mystyle.css">
</head>

  
<body ng-controller="wardobe as my">


<div class="container" >
<header>
   <button  class="glyphicon glyphicon-search" id="bt"></button>
        <h3>Which Style do you want to wear today?-----></h3>
</header>
    <div class="categories">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="add.php">Add Item</a></li>
            <li><a href="view.php">View Item</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </div>
	

<?php
session_start();
include("database.php");
if(!isset($_SESSION['email']))
{
	header('location:../index.php');
}
?>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Select list (select one):</label>
        <select class="form-control" name="category">
            <option>Shirt</option>
            <option>Trouser</option>
            <option>Jeans</option>
            <option>Bag</option>
            <option>Shoes</option>
            <option>Jacket</option>
        </select>
        <br>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" rows="5" name="description"></textarea>
        </div>
        <div>
            <label> Select images:</label> <input type="file" name="image">
        </div>
        <br>

        <div>
            <input type="submit" class="btn btn-default" name="insert_item" value="Submit" >
        </div>
    </div>
</form>

<?php
if(isset($_POST['insert_item']))
{
	$c_mail=$_SESSION['email'];
	
	$cat=$_POST['category'];
	
	$desc=$_POST['description'];
	
	$get_image=$_FILES['image']['name'];
	
	$get_image_temp=$_FILES['image']['tmp_name'];
	
	move_uploaded_file($get_image_temp,"image/$get_image");
	
    $insert_product="insert into about_item (item_category,item_description,item_picture,customer_mail) values ('$cat','$desc','$get_image','$c_mail')";
	
	$run_query=mysql_query($insert_product);
	
	if($run_query){
	
	echo "<script>alert('Successffuly Uploaded')</script>";
	
	}
	else{
		echo "<script>alert('Sorry, Please Try again!')</script>";
	}
}
?>

</div>
</body>
</html>