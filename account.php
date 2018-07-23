<?php
include 'user_session.php';
include 'head.php';
?>

    <?php include 'nav.php';?>

        <main class="contact">
            <h2>Account</h2>
            <form method="get" action="logout.php">
                   <input type="submit" class="next1" value="Logout">
            </form>
            
            <?php
                $username = $_SESSION["user_login"];
            
                $server = "elvencreations.com.mysql";
            	$userdb = "elvencreations_";
            	$pass = "aliabbas123";
        
            	$link = mysqli_connect($server,$userdb,$pass);
            	mysqli_select_db($link,"elvencreations_");
                
                $sql = "SELECT * FROM common_users WHERE username='$username'";
                $result = mysqli_query($link,$sql);
                
                $row = mysqli_fetch_array($result);
                
                $password = $row["password"];
                $email = $row["email"];
            ?>
            
            <form method="post" action="edit_details.php">
                    <input class="invisible" type="text" value="<?php echo $username; ?>">
                   <input type="submit" class="next1" value="Edit Details">
            </form>
            
            <form method="post" action="download.php">
                   <input type="submit" class="next1" value="Download our favourite picture">
            </form>
            
            </main>

</html>