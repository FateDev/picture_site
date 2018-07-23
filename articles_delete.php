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

    		$sql = "DELETE FROM articles WHERE id=$id";
    		mysqli_query($link,$sql);

            echo "<h1>Your article has been deleted.</h1>";

            ?>

    </main>

</html>