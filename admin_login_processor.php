<?php 

session_start();



            $username = $_POST["username"];
            $user_password = $_POST["password"];
            $id = $_POST["id"];

            $server = "elvencreations.com.mysql";
            $userdb = "elvencreations_";
            $password = "aliabbas123";

            $link = mysqli_connect($server,$userdb,$password);
            mysqli_select_db($link,"elvencreations_");

            $sql = "SELECT * FROM users WHERE id=$id";
            $result = mysqli_query($link,$sql);

            $row = mysqli_fetch_array($result);

            $real_username = $row["username"];
            $real_password = $row["password"];


            if ($real_password == $user_password && $real_username == $username) {
              $_SESSION['admin_login']=$username;
              header("Location: admin.php");
            }else{
              include 'head.php';
              include 'nav.php';
              echo "<main class=\"blog admin\">";
              echo "Your username, password or ID are incorrect. Please try again.";
              exit();
            }

            mysqli_close($link);
            
           ?> 
</main>

</html>