<?php include 'session.php' ?>

<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="articles-edit">

            <?php include 'return_admin.php'; ?>

    	<?php
            $date = date("Y-m-d");
    	?>
            <form action="articles_add_processor.php" method="post" enctype='multipart/form-data' style="margin:auto;">
            Title<br>
            <input type="text" style="font-size:120%;" name="title" value="" class="edit_input">
            <div>
                <div><br>
                    Content<br>
                    <textarea name="content" style="font-size:120%; width:100%;" cols="50" rows="13"></textarea><br><br>
                </div>
                <div style="border-style: solid;padding:5px;">
                    Upload image:
                    <input type="radio" name="img_choice" value="upload">
                    <input type="file" name="article-img_upload" value="Choose image file for article" style="width:100%; height:100%">
                    <br><br><hr>
                    Get image from a URL:
                    <input type="radio" name="img_choice" value="url" checked="checked">
                    <br>
                    <input type="text" name="article-img_url" value="">
                </div>
            </div>
                <div>
                <div>
                    <input type="text" style="opacity:0;" value="" name="id">
                    <div class="col span-2-of-2">
                        <input class="submit" type="submit" value="Submit Information">
                    </div>
                </div>
            </div><br>
            <span class="publish">Published on the <?php echo $date ?></span>
            </form>

    </main>

</html>