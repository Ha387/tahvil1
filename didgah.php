<style>
button {
    background-color: white;
    color: black;
    font-size: 12px;
    padding: 10px 45px;
    border-radius: 15px;
    font-weight: 600;
    margin-top: 10px;
}
button.hidden{
    background-color: white;
    border-color: black;
}

p {
  font-family: B nazanin; /* فونت متن */
  font-size: 18px; /* اندازه فونت */
  color: white; /* رنگ متن */
  text-align: center; /* تراز متن در وسط */
  line-height: 1.5; /* فاصله بین خطوط */
  margin: 20px 0; /* فاصله از بالا و پایین */
}
a{
    text-align: center;
    direction: rtl;
    color: white;
}


</style>
<?php
include("header.php");
?>


<?php

include("data.php");
$result= mysqli_query($c,"SELECT * FROM `form`");
mysqli_close($c);
$row=mysqli_fetch_array($result);
?>
<p>

<p>لیست دیدگاه ها</p>

<?php
while($row){
?>

<p>
<?php echo($row["mozoe"]); ?>   
<a href="didgah_show.php?id=<?php echo($row["id"]); ?>">
<button>مشاهده دیدگاه کامل</button>
<?php echo($row["mozoe"]); ?>   
<a href="didgah_delete.php?id=<?php echo($row["id"]); ?>">
<button>پاک کردن</button>
<?php
$row=mysqli_fetch_array($result);}
?>

<p>  </p>


<?php
include("footer.php")
?>