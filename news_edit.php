<style>
    form{
    background-color: #1111;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    /* height: 100%; */
}
input{
    background-color: #eee;
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
    /* width: 100%;
    outline: none; */
}
#as1{
    background-color: #eee;
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
     width: 100%;
    outline: none; 
}
</style>
<?php
include("header.php");
$id=$_GET['id'];
?>
<form action="news_edit_action.php" method="post">
<input type="text" name="id" hidden value="<?php echo($id);?>">
    <p></p>
    <p></p>
    <input type="text" name="sartitr" placeholder="عنوان" >
    <p></p>
<textarea rows="5" name="news" placeholder="خبر اصلی را وارد کنید" id="as1"></textarea>
<p></p>
    <input type="submit" value="ok">
</form>
<?php
include("footer.php");
?>