<?php
include("database.php"); 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.1.1.min.js"></script>
  <script src="angular.js"></script>
  <script src="app.js"></script>
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" href="mywad.css">
</head>
<body ng-app="MyWardrobe">
<div class="container">
  <div class="page-header">
    <h1>Welcome To My Homepage Rishav</h1>
  </div>
 <div ng-controller="panel as my" ng-init="tab=1"  class="forms1">
   <ul class="nav nav-pills">
     <li ng-class="{active:tab ===1 }"><a href ng-click="tab=1" class="glyphicon glyphicon-plus">Sign In</a></li>
     <li ng-class="{active:tab ===2 }"><a href ng-click="tab=2" class="glyphicon glyphicon-user">Sign Up</a></li>
</ul>
   <div class="panel" ng-show="tab===1">
     <form method="post" action="authentication.php" enctype="multipart/form-data">
       <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" name="email" placeholder="Enter email">
       </div>
       <div class="form-group">
         <label for="pwd">Password:</label>
         <input type="password" class="form-control" name="password" placeholder="Enter password">
       </div>
       <input type="submit" class="btn btn-default" name="signin" value="Sign In" >
     </form>
     <br>
     <button type="button" class="btn btn-primary btn-block">Facebook Login</button>
   </div>
   <div class="panel" ng-show="tab===2">
     <form method="post" action="authentication.php" enctype="multipart/form-data">
       <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control" name="name" placeholder="Enter Name">
       </div>
       <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" class="form-control" name="email" placeholder="Enter email">
       </div>
       <div class="form-group">
         <label for="password">Password:</label>
         <input type="password" class="form-control" name="password" placeholder="Enter password">
       </div>
       <input type="submit" class="btn btn-default" name ="signup" value="Sign Up" >
     </form>
     <br>
     <button type="button" class="btn btn-primary btn-block">Facebook Login</button>
   </div>
</div>
</div>
</body>
</html>
