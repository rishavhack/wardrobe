<?php
session_start();
include("database.php");
if(isset($_GET['delete']))
{

$id=$_GET['delete'];
$delete_item="delete from about_item where item_id='$id'";
$run_delete=mysql_query($delete_item);
if($run_delete)
{
	echo "<script>alert('You have delted an item!')</script>";
	echo "<script>window.open('view.php','_self')</script>";
}
}
else
{
echo "<script>alert('Something went wrong')</script>";
}
?>