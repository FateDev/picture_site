<?php include 'head.php';?>

    <?php include 'nav.php';?>

        <main class="contact">
        
        <?php 
        
        $username = $_POST["username"];
        $email = $_POST["email"];
        
        $server = "elvencreations.com.mysql";
    	$userdb = "elvencreations_";
    	$pass = "aliabbas123";

    	$link = mysqli_connect($server,$userdb,$pass);
    	mysqli_select_db($link,"elvencreations_");
        
        $sql = "SELECT username FROM common_users WHERE username='$username'";
        $result = mysqli_query($link,$sql);
        
        $username_check = mysqli_fetch_array($result);
        $username_check = $username_check["username"];
        
        if($username_check == $username){
            echo "Please go back and select another username.";
            exit();
        }
        
        $to = $email;
        $subject = "Picture Account Verification";
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <admin@elvencreations.com>' . "\r\n";
        
        function randomPassword(){
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!£$%^&*()_+-=?><|#~][{}`¬@:;'.,";
            $pass = array();
            $charsLength = strlen($chars);
            for($i = 0; $i <= 10; $i++){
                $n = rand(0,$charsLength);
                $pass[] = $chars[$n];
            }
            
            return implode($pass);
        }
        
        $random_password = randomPassword();
        
        $message ="Thank you for signing up to Elven Creations.com. Your username is $username and, you password is $random_password.
                    Once you have logged in, you can change you password in the accounts section.";
        
        mail($to,$subject,$message,$headers);
        ?>
        
        <form action="create_account.php" method="post">
            Check your email for a password:
            <input type="password" name="password" value="<?php echo $random_password; ?>">
            <input style="display:none;" type="email" name="email" value="<?php echo $email; ?>">
            <input style="display:none;" type="text" name="username" value="<?php echo $username; ?>">
            <input style="display:none;" type="password" name="real_password" value="<?php echo $random_password; ?>"><br>
            <input type="submit" class="next1" value="Verify Account">
        </form>
            
        </main>
        