
<?php
include("header.php");
$id=$_GET["id"];
include("data.php");
$result= mysqli_query($c,"SELECT * FROM `form` where id=$id" );
mysqli_close($c);
$row=mysqli_fetch_array($result);
?>
<?php
if($row){
?>

<p>
<?php echo($row["text"]); ?>   
<!-- <a href="didgah_show.php?id=<?php echo($row["id"]); ?>"> -->
<?php


}
include("footer.php");
?>
</p>
<style>

  p{
    color: white;
    font-family: b nazanin;
    font-size: 25px;
  }  
</style>