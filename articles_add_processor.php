<?php include 'session.php' ?>

<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="articles-edit">

            <?php include 'return_admin.php'; ?>

    	<?php

    		$server = "elvencreations.com.mysql";
    		$userdb = "elvencreations_";
    		$password = "aliabbas123";

            $content = $_POST["content"];
            $title = $_POST["title"];
            $date = date("Y-m-d");
            $img_choice = $_POST["img_choice"];
            $price = $_POST["price"];
    		
    		if($img_choice == "upload"){
    		    $img_location = "/uploads/".$_FILES["article-img_upload"]["name"];
    		    if($_FILES["article-img_upload"]["type"] == "image/jpeg" || $_FILES["article-img_upload"]["type"] == "image/png" || $_FILES["article-img_upload"]["type"] == "image/jpg" || $_FILES["article-img_upload"]["type"] == "image/gif")
    		    {
                   if(move_uploaded_file($_FILES["article-img_upload"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/uploads/".$_FILES["article-img_upload"]["name"])){
                       #btw the previous line was just saying that you want to retrieve the temporary location of the image and then change it to one in upload.
                        #echo "Successful.";
                    }else{
                        #echo "Unscuccessful.";
                    }
    		    }else{
    		        echo "Please only upload JPEG, PNG, JPG or GIF file type images.";
    		        exit();
    		    }
    		}elseif($img_choice == "url"){
    		    $img_location = $_POST["article-img_url"];
    		}
            

    		$link = mysqli_connect($server,$userdb,$password);
    		mysqli_select_db($link,"elvencreations_");

            #echo $img_location;

    		$sql = "INSERT INTO articles (title,content,publish_date,img_location) VALUES ('$title','$content','$date','$img_location')";
            if(mysqli_query($link,$sql)){
                echo "<h1>Your additions have been made.</h1>";
            }else{
                echo "Sorry, your additions have not been made.";
            }

            mysqli_close($link);

            ?>

    </main>

</html>