<?php include 'head.php';?>

    <?php include 'nav.php';?>

        <main class="contact">
            <h2>Register</h2>

            <form action="verify.php" method="post">
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
                        E-mail:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3"></div>
                    <div class="col span-1-of-3">
                        <input class="submit" type="submit" value="Register">
                    </div>
                    <div class="col span-1-of-3"></div>
                </div>
            </form>
            
        </main>

</html>