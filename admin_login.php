<?php include 'head.php';?>

    <?php include 'nav.php';?>

        <main class="contact">
            <h2>Admin Login</h2>

            <form action="admin_login_processor.php" method="post">
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
                    <div class="col span-1-of-3">
                        ID:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="number" name="id" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col span-1-of-3"></div>
                    <div class="col span-1-of-3">
                        <input class="submit" type="submit" value="Login">
                    </div>
                    <div class="col span-1-of-3"></div>
                </div>
            </form>
            
        </main>

</html>