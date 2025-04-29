<style>
form
{

    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 80px;
     height: 50%;
}

input{
    background-color: #eee;
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
     
    outline: none;
}
textarea{
    background-color: #eee;
    border:none;
    margin: 8px 0;
    padding: 10px 15px;
    font-size: 13px;
    border-radius: 8px;
     
    outline: none; 
}
</style>
<?php
include("header.php"); 
?>
<form action="addnews_action.php" method="post" enctype="multipart/form-data">
<p>عکس خود را برای صفحه اصلی وارد کنید:</p><input type="file" name="img" id="" placeholder="عکس خود را وارد کنید:">
<p>سرتیتر را وارد کنید :</p><input type="text" name="sartitr" placeholder="سرتیتر خبر را وارد کنید:">
<p></p>
<textarea rows="5" name="news" placeholder="خبر اصلی را وارد کنید"></textarea>
<p></p>
<input type="submit" value="ثبت">
</form>
<?php
include("footer.php"); 
?>