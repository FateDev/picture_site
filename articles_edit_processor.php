<?php include 'session.php' ?>

<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="articles-edit">

            <?php include 'return_admin.php'; ?>

    	<?php

    		$content = $_POST["content"];
    		$title = $_POST["title"];
    		$id = $_POST["id"];
    		$date = date("Y-m-d");

    		$server = "elvencreations.com.mysql";
    		$userdb = "elvencreations_";
    		$password = "aliabbas123";
    		$img_choice = $_POST["img_choice"];
    		
    		if($img_choice == "upload"){
    		    $img_location = "/uploads/".$_FILES["article-img_upload"]["name"];
               if(move_uploaded_file($_FILES["article-img_upload"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/uploads/".$_FILES["article-img_upload"]["name"])){
                   #btw the previous line was just saying that you want to retrieve the temporary location of the image and then change it to one in upload.
                    #echo "Successful.";
                }else{
                    #echo "Unscuccessful.";
                }
    		}elseif($img_choice == "url"){
    		    $img_location = $_POST["article-img_url"];
    		}
            

    		$link = mysqli_connect($server,$userdb,$password);
    		mysqli_select_db($link,"elvencreations_");

    		$sql = "UPDATE articles SET title='$title', content='$content', publish_date='$date', img_location='$img_location' WHERE id=$id";
    		if(mysqli_query($link,$sql)){
    			echo "<h1>Your edits have been made.</h1>";
    		}else{
    			echo "Sorry, your edits did not work.";
    		}


    		mysqli_close($link);

    	?>

    </main>

</html>