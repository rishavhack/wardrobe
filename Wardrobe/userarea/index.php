<?php
session_start();
include("database.php");
if(!isset($_SESSION['email']))
{
	header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
	<div>
	

</div>	
<h1>Welcome to the myWardrobe</h1>
<h2>All contain text are dummy</h2>

<p>MyWardrobe is devoted to making the experience of buying and selling preloved designer fashion
 clothing exciting, stylish, inspirational and fun. Our mission is to build a trusted UK social shopping resale site with 
 real people behind real profiles – 
a place to browse and be inspired as well as buy and sell pre-owned designer fashion clothes</p>
<h3>If U want to add something then <a href ="add.php">Click here</a></h3>
</div>
</div>

</body>
</html>