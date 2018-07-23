<?php include 'head.php';?>

    <?php include 'nav.php';?>

        <main class="contact">
            <h2>Login</h2>

           <form action="login_processor.php" method="post">
                <div class="row">
                    <div class="col span-1-of-3">
                        Username:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="username" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        Password:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="password" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3"></div>
                    <div class="col span-1-of-3">
                        <input class="submit" type="submit" value="Login">
                    </div>
                    <div class="col span-1-of-3"></div>
                </div>
            </form>
            <br>
            <hr>
            <hr>
            <form method="get" action="register.php">
                   <input type="submit" class="next1" value="Register">
            </form>
            <br>
            <hr>
            <hr>
            <form method="get" action="session_login.php">
                   <input type="submit" class="admin_login_button" value="Admin Login">
            </form>
            
        </main>

</html>