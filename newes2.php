<?php include("header.php"); 
$id=$_GET["id"];
?>

<body>
    <div class="container">
        <header>
            <h1 id="h111">خبرنگاری دانش آموزان</h1>
            <?php
                include("data.php");
                $result= mysqli_query($c,"SELECT * FROM `news` where `id` = $id");
                mysqli_close($c);
                $row=mysqli_fetch_array($result);
                ?>
                <?php
                if($row){
                ?>
                <p><img class="img" src=" <?php echo($row["img"]); echo($id);?>" alt=""></p>
                    
                <?php
                $row=mysqli_fetch_array($result);}
                ?> 
            <?php
        include("data.php");
        $result= mysqli_query($c,"SELECT * FROM `news` where `id`= $id");
        mysqli_close($c);
        if($result){

            $row=mysqli_fetch_array($result);
            ?>
        <?php
        if($row){
            ?>
        <p> <?php echo($row["sartitr"]); echo($id);?></p>
        <?php
        $row=mysqli_fetch_array($result);}
        ?>
        </header>
        <section id="a2">
            <p>
                <?php
        include("data.php");
        $result= mysqli_query($c,"SELECT * FROM `news`where `id`= $id");
        mysqli_close($c);
        $row=mysqli_fetch_array($result);
        ?>
        <?php
        if($row){
            ?>
        <p> <?php echo($row["news"]);echo($id); ?></p>
        <?php
        $row=mysqli_fetch_array($result);}
        ?> 
    </p>
    <?php 
}
    include("footer.php"); 
    ?>
    <style>
        *{color: white;}
        #h111{
        color: black;
    }
</style>