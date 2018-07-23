<?php
include 'head.php';
include 'nav.php';
?>

    <main class="contact">
        <h3 style="font-size:150%;">Resend Password</h3><hr>
        <form action="resend_password_processor.php" method="post" style="font-size:150%;">
            Username:<br>
            <input style="font-size:90%;color:#555;" type="text" value="" name="username">
            <br>
            <input type="submit" class="next1" value="Resend">
        </form>
    </main>

