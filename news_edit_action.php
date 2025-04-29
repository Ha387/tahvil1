<?php 
include("header.php");

// Check if 'id' parameter exists and is numeric
if(isset($_POST["id"]) && is_numeric($_POST["id"])) {
    $id = intval($_POST["id"]);
    
    // Database connection with error handling
    include("data.php");
    if(!$c) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($c, "SELECT * FROM `news` WHERE `id` = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
<body>
    <div class="container">
        <header>
            <h1 id="h111">خبرنگاری دانش آموزان</h1>
            <?php if(!empty($row["img"])) { ?>
                <p><img class="img" src="<?php echo htmlspecialchars($row["img"]); ?>" alt=""></p>
            <?php } ?>
            
            <?php if(!empty($row["sartitr"])) { ?>
                <p><?php echo htmlspecialchars($row["sartitr"]); ?></p>
            <?php } ?>
        </header>
        
        <section id="a2">
            <?php if(!empty($row["news"])) { ?>
                <p><?php echo nl2br(htmlspecialchars($row["news"])); ?></p>
            <?php } ?>
        </section>
<?php
    } else {
        echo "<p>No news found with this ID</p>";
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($c);
} else {
    echo "<p>Invalid news ID</p>";
}

include("footer.php"); 
?>

<style>
    * { color: white; }
    #h111 { color: black; }
</style>