<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="about">
        <div class="row">
            <h2>We love Photography</h2>
        </div>
        <div class="row">
            <h3>And we want to tell you why.</h3>
        </div>
        
        <div class="row">
            <div class="col span-1-of-3 about-info">
                <i class="ion-ios-flower about-i"></i><br>
               Photography of the natural world is what we believe in.
            </div>
            <div class="col span-1-of-3 about-info">
                <i class="ion-ios-rainy"></i><br>
                Rain, shine, snow, wind. These elements create some of the most spectacular spectacles seen till this day.
            </div>
            <div class="col span-1-of-3 about-info">
                <i class="ion-ios-rose"></i><br>
                We love what we do so, this website is dedicated to sharing it with you.
            </div>
        </div>
        <hr><br>
        
                    <h3>Contact Us</h3><br>
        <form style="font-size:130%;" action="contact_form.php" method="post">
                <div class="row">
                    <div class="col span-1-of-3">
                        Name:
                    </div>
                    <div class="col span-2-of-3">
                        <input style="font-size:100%;" type="text" name="name" required="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        E-mail:
                    </div>
                    <div class="col span-2-of-3">
                        <input style="font-size:100%;" type="email" name="email" required="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        Message
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" style="width:100%;font-size:100%;" rows="4" required="required"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3"></div>
                    <div class="col span-1-of-3">
                        <input class="submit" type="submit" value="Submit Information">
                    </div>
                    <div class="col span-1-of-3"></div>
                </div>
            </form>
    </main>

</html>