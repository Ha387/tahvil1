<?php
include("header.php");
?>
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];


include("data.php");
$result= mysqli_query($c,"INSERT INTO `form`(`name`, `email`, `mozoe`, `text`)
VALUES ('$name','$email','$subject','$message')");
mysqli_close($c);

if($result===true)
{
?>
<p  id="#p11">
    <p></p>
<?php echo("دیدگاه شما با موفقیت ثبت شد");?>
</p>
<?php    
}else{
    echo("not compilet");

}
?> 
<?php
include("footer.php");
?>
<style>
    #p11{
        color: white;
        font-size: 50px;
        background-color: white;
    }
</style>