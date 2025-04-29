<style>
    p{
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
     font-family: B nazanin;
    outline: none;
    }
    *{
        color: white;
    }
</style>
<?php
include("header.php");

$name=$_POST["sartitr"];
$news=$_POST["news"];
$imagepath='';
if(isset($_FILES['img']) && $_FILES["img"]["error"] == 0){
    $targetdir="uploads/";
    if(!is_dir($targetdir))
    {
        mkdir($targetdir,0777,true);
    }
    $imagename=$_FILES['img']['name'];
    $targetfile=$targetdir.$imagename;
    if(move_uploaded_file( $_FILES['img']['tmp_name'],$targetfile)){
        $imagepath=$targetfile;
    }else{
        echo"error";
    
    }
    }
    include("data.php");
    $result= mysqli_query($c,"INSERT INTO `news`( `sartitr`, `news`, `img`)
     VALUES ('$name','$news','$imagepath')");
    mysqli_close($c);
    
    if($result===true)
    {
    ?>
    <p>
    <?php echo("خبر با موفقیت ثبت شد");?>
    </p>
    <?php    
    }else{
        echo("not compilet");
    }
    
include("footer.php");
?>