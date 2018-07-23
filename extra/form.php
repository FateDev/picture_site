<?php include 'head.php';?>

    <?php include 'nav.php';?>

        <main class="results">
            <br>
            <?php
            
            $name = $_POST["name"];
            $number = $_POST["number"];
            $radius = $_POST["radius"];
            $unit = $_POST["unit"];
            
            echo "<span class='header2'><br>Numers</span>";

            if (empty($name)) {
            	echo "Enter your name plez.<br>";
            	exit();
            }else{
            	if (is_numeric($name) || is_numeric($number) == false) {
            	echo "Enter your name please and number in the correct format please.<br>";
            	exit();
            	}else{
            		if ($number == true) {	
            			echo "You entered the number $number. Therefore you are not null, you will understand soon, $name....<br>";
            		}else{
            			echo "FOUL DEMON, YOU ARE IN LEAGUE WITH FALSEHOOD!!!<br>";
            		}
            	}
            }

            if ($number >= 9000) {
            	echo "For being so bold as to pick a number of over 9000, you get a disount!<br>";
            	$number2 = $number - $number;
            	echo "You have won so much! In fact you won exactly £$number2!<br>";
            	echo "I was joking!!!!! Baka... >/////< <br>";
            	$number3 = $number % 2;
            	echo "You get £$number3.<br>";
            	$number4 = $number / 0.85;
            	$number4 = number_format($number4,2);
            	echo "Or £$number4????<br>";
            }

            if ($number == 203) {
            	echo "Kaneki-sensei once said that there are 203 bones, he taught this to Ayato Kirishima in a rather painful way.<br>";
            }elseif ($number == 101.5 || $number == 406) {
            	echo "And you weren't close enough to the truth of life, half there or twice as much!!! I cri<br>";
            }elseif ($number == 203 && $name == "Kaneki-sensei" && $number%2 == 1) {
            	echo "You returned, sensei!!! I cri of happiness<br>";
            }else{
            	echo "";
            }

            echo "Did you know the modulus of 100 with 10 is 0?<br> Here's the evidence: ";
            echo " ".(100%10)."<br>";

            switch($name){
                  case 'Kaneki':
                        echo "I see you there Kaneki.<br>";
                        break;
                  case 'Kaneki-sensei':
                        echo "Okaeri-nasasi sensei.<br>";
                        break;
                  case 'Haise Sasaki':
                        echo "Who are you? You must find yourself, child.<br>";
                        break;
                  case 'Ali':
                        echo "Hi, Oh lord Creator-sama.<br>";
                        break;
                  case 'Ali Abbas':
                        echo "Milord, Creator-sama.<br>";
                        break;
                  default:
                        echo "Dunno who you are.<br>";
            }

            for ($i=1; $i <= 10; $i++) { 
                  if($i != 10){
                        echo "$i -- ";
                  }else{
                        echo "$i";
                  }

            }
            echo "<br>";
            $count = 1;

            while($count <= 10){
                  if($count != 10){
                        echo "$count -- ";
                  }else{
                        echo "$count";
                  }
                  $count++;
            }

            echo "<br>";
            $count = 11;

            do{
                  if($count != 10){
                        echo "$count -+= ";
                  }else{
                        echo "$count";
                  }
                  $count++;
            }while($count < 11);

            echo "<br>";
            $count = 11;

            while($count < 11){
                  if($count != 10){
                        echo "$count -- ";
                  }else{
                        echo "$count";
                  }
                  $count++; 
            }

            for ($i=0; $i <= 10; $i++){
                  $randomNumber = rand(1,20);

                  if ($randomNumber%5!==0) {
                        break;
                  }
                  echo $randomNumber." ";
            }

           /* 

           $items = array('Chips','Potatoes','Fries','Hash Browns');

            echo $items[0]."<br>";

            for ($i=0; $i < count($items); $i++) { 
            	echo ($i+1).". ".$items[$i]."<br>";
            }

            echo " Today is ".date('l').".";

            echo "<br>".sqrt(121371);  

           */

            echo "<span class='header'><br>Circles</span>";

            $pi = 3.142;
            
            $diameter = $radius * 2;
            $perimeter = 2 * $pi * $radius;
            $area = $pi * ($radius^2);

            echo "<br><br> Diameter = $diameter $unit. <br> Perimeter = ".$perimeter." ".$unit.". <br> Area = $area $unit.";



            ?>

            <br><br>
            
        <!--    <form method="post" action="contact2.php">
            <input type="submit" class="next" href="contact2.php" value="Go to the next form">
            </form> -->
            
        </main>

</html>