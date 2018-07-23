<?php include 'session.php' ?>

<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="articles-edit">

            <?php include 'return_admin.php'; ?>

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
            $description = $row["description"];
            $article_img = $row["img_location"];
            $price  = $row["price"];

    		mysqli_close($link);
    	?>
            <form action="articles_edit_processor.php" method="post" enctype='multipart/form-data' style="margin:auto;">
            Title<br>
    		<input type="text" style="font-size:120%;" name="title" value="<?php echo $title ?>" class="edit_input">
            <div>
                <div><br>
                    Content<br>
                    <textarea name="content" style="font-size:120%; width:100%;" cols="50" rows="13"><?php echo $content ?></textarea><br><br>
                </div>
                <div style="border-style: solid;padding:5px;">
                    Upload image:
                    <input type="radio" name="img_choice" value="upload">
                    <input type="file" name="article-img_upload" value="Choose image file for article" style="width:100%; height:100%">
                    <br><br><hr>
                    Get image from a URL:
                    <input type="radio" name="img_choice" value="url" checked="checked">
                    <br>
                    <input type="text" name="article-img_url" value="<?php echo "$article_img"; ?>">
                </div>
            </div>
                <div><br>
                <div>
                    <input type="text" style="opacity:0;" value="<?php echo"$id"; ?>" name="id">
                    <div class="col span-2-of-2">
                        <input class="submit" type="submit" value="Submit Information">
                    </div>
                </div>
            </div><br>
            <span class="publish"><?php echo "Published on the ".$publish_date ?></span>
            </form>

    </main>

</html>