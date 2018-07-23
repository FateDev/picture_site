<?php

        function randomPassword(){
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $pass = array();
            $charsLength = strlen($chars);
            for($i = 0; $i <= 10; $i++){
                $n = rand(0,$charsLength);
                $pass[] = $chars[$n];
            }
            
            return implode($pass);
        }
        
        $random_password = randomPassword();
        
        echo $random_password;      
?>