<?php include 'head.php';?>

    <?php include 'nav.php';?>

        <main class="contact">
            <h2>Contact Us</h2>

            <form action="form.php" method="post">
                <div class="row">
                    <div class="col span-1-of-3">
                        Name:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        A number plez:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="number">
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        Another number plez for a circle:
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="radius">
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        Units plez:
                    </div>
                    <div class="col span-2-of-3">
                        <select name="unit" required>
                            <option value="meters">Meters</option>
                            <option value="miles">Miles</option>
                            <option value="light-years">Light-years</option>
                            <option value="gigaparsecs">Gigaparsecs</option>
                        </select>
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