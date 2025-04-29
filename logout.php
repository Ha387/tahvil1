<?php
include("header.php");
?>
<?php

session_start();
unset($_SESSION['login'])
?>
<script>
    location.replace("index.php")
</script>
<?php
include("footer.php");
?>