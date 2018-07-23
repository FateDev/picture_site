<?php 
include 'user_session.php';
include 'head.php';
include 'nav.php';
echo "<main class=\"contact\">

        <h3>Edit your account Details</h3><hr>";
        
        $username = $_SESSION["user_login"];
        
        $server = "elvencreations.com.mysql";
        $userdb = "elvencreations_";
        $pass = "aliabbas123";
        $link = mysqli_connect($server,$userdb,$pass);
        mysqli_select_db($link,"elvencreations_");
        
        $sql = "SELECT * FROM common_users WHERE username='$username'";
        $results = mysqli_query($link,$sql);
        
        $row = mysqli_fetch_array($results);
        
        $password = $row["password"];
        $email = $row["email"];
?>    
        <style>
                .edit_details_input{
                    font-size:100%; 
                    width:50%;
                }
            @media only screen and (max-width:1400px){
                .edit_details_input{
                    width:100%;
                }
            }
        </style>
    
    <div style="font-size:150%;padding:50px;">
        <form action="edit_details_processor.php" method="post">
            E-mail: 
            <input class="edit_details_input" type="email" name="email" value="<?php echo $email; ?>" required="required"><br><br>
            Password: 
            <input class="edit_details_input" type="text" name="password" value="<?php echo $password; ?>" required="required"><br><br>
            <input type="submit" class="next1" value="Confirm Changes">
        </form>
    </div>
</main>