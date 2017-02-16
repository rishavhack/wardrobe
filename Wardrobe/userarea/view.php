<?php
session_start();
include("database.php");
$cemail=$_SESSION['email'];
if(!isset($_SESSION['email']))
{
	header('location:../index.php');
}
?>
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
<h1>View Items</h1>
<table class="table table-hover">
    <thead>
    <tr>
        <th>S.No.</th>
        <th>Category</th>
        <th>Description</th>
        <th>Picture</th>
        <th>Date of Purchase</th>
        
        <th>Delete</th>
    </tr>
	<?php
	$get_value="select * from about_item where customer_mail='$cemail'";
	$run_query=mysql_query($get_value);
	$i=0;
	while($row_item=mysql_fetch_array($run_query))
	{
	$id=$row_item['item_id'];
	$cat=$row_item['item_category'];
	$desc=$row_item['item_description'];
	$picture=$row_item['item_picture'];
	$date=$row_item['item_date'];
	$i++;
	?>
	<tr>
        <th><?php echo $i."."; ?></th>
        <th><?php echo $cat; ?></th>
        <th><?php echo $desc; ?></th>
        <th><img src="image/<?php echo $picture; ?>" width="40px" height="40px"/></th>
        <th><?php echo $date; ?></th>
        
        <th><a href="delete.php?delete=<?php echo $id;?>">Delete</a></th>
    </tr>
	<?php } ?>
	
    </thead>
    </tbody>
</table>

</div>
</body>
</html>