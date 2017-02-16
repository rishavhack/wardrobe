<?php
	session_start();

	include("database.php");

if(isset($_POST['signup']))
{
	 $cname= $_POST['name']; 

     $cemail=$_POST['email'];

	 $cpassword=$_POST['password'];
	 
	 $get_user="select * from user where email='$cemail'";
	 
	 $run_user=mysql_query($get_user);
	 
	 $row_user=mysql_num_rows($run_user);
	 
	 if( $row_user==1)
	 {
	   echo "<script>alert('Email is already registered')</script>";
		echo "<script>window.open('index.php','_self')</script>";
       exit();	   
	 }
	 
	 $insert_query="INSERT INTO user (name,email,password) values ('$cname','$cemail','$cpassword')";

	 $run_query=mysql_query($insert_query);

	 if($run_query){

	 $_SESSION['email']=$cemail;

	 echo "<script>alert('Suceffuly Up')</script>";

	 echo "<script>window.open('userarea/index.php','_self')</script>";
               	 }
	 else{
		 
		 echo "<script>alert('Something Error')</script>";
	     }
}
if(isset($_POST['signin']))
{
	 $cemail= $_POST['email']; 
     
	 $cpassword =$_POST['password'];
     
	 $get_data= "SELECT * FROM user WHERE email='$cemail' and password='$cpassword'";
     
	 $run_query=mysql_query($get_data);
     
	 $row_array = mysql_fetch_array($run_query);
      
	 if($run_query){
	 
	 $_SESSION['email']=$cemail;
     
	 echo "<script>alert('Suceffuly logIn')</script>";
     
	 echo "<script>window.open('userarea/index.php','_self')</script>";
                  }
     else{
	 
	 echo "<script>alert('Enter Valid Email Id and Password')</script>";
        }
}
?>