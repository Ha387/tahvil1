<?php
include("header.php");

$id=$_GET["id"];

include("data.php");
$result= mysqli_query($c,"DELETE FROM `form` WHERE id=$id");
mysqli_close($c);

if($result===true)
{
    ?>
    <script>
        location.replace("index.php")
    </script>
    <?php
}else{
    echo("not delet");
}

include("footer.php");
?>