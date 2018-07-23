<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="articles-individual">

    	<?php

    		$id = $_GET["id"];

    		$server = "elvencreations.com.mysql";
    		$userdb = "elvencreations_";
    		$password = "aliabbas123";

    		$link = mysqli_connect($server,$userdb,$password);
    		mysqli_select_db($link,"elvencreations_");

    		$sql = "SELECT * FROM articles WHERE id=$id";
    		$result = mysqli_query($link,$sql);

    		$row = mysqli_fetch_array($result);

    		$title = $row["title"];
    		$content = $row["content"];
    		$publish_date = $row["publish_date"];
            $img_location = $row["img_location"];
            $price = $row["price"];

    		mysqli_close($link);
    	?>

    		<h1><?php echo $title ?></h1>
            <img style="margin:auto;text-align:center;max-height:60vh;width:auto;float:left;margin-right:10px;" class="content-img" src="<?php echo "$img_location";?>">
            <?php echo $content ?>
            <span class="publish"><?php echo "Published on ".$publish_date ?></span>
    </main>

</html>