<?php include 'head.php';?>

    <?php include 'nav.php';?>

    <main class="blog">
        <div class="row">
            <h2>See some of our pictures</h2>
        </div>
       <div class="post-wrapper clearfix">
            
         <!--   -->

        <?php
                $server = "elvencreations.com.mysql";
                $userdb = "elvencreations_";
                $password = "aliabbas123";
    
                $link = mysqli_connect($server,$userdb,$password);
                mysqli_select_db($link,"elvencreations_");
    
                $sql = "SELECT * FROM articles";
                $result = mysqli_query($link,$sql);
    
                while ($row=mysqli_fetch_array($result)) {
                  $title = $row["title"];
                  $description = $row["description"];
                  $id = $row["id"];
                  $publish_date = $row["publish_date"];
                  $img_location = $row["img_location"];
                  $price = $row["price"];
    
                 echo "
                <div class=\"post\">
                <table style=\"width:100%;\">
                      <tr>
                          <th colspan=\"2\"><h4 style=\"font-size:150%;\">$title<h4><hr></th>
                          <th></th>
                      </tr>
                      <tr>
                          <td colspan=\"2\">
                              <img style=\"height:20vh;width:auto;\" src=\"$img_location\"><hr>
                          </td>
                          <td></td>
                      </tr>
                      <tr>
                          <td colspan=\"2\">$publish_date<hr></td>
                      </tr>
                      <tr>
                           <td colspan=\"2\">
                                <form method=\"get\" action=\"articles.php?id=$id\">
                                    <span style=\"display:none;\" class=\"invisible\"><input style=\"display:none;\" type=\"text\" name=\"id\" value=\"$id\"></span>
                                    <input type=\"submit\" class=\"next1\" value=\"Take a look!\">
                                </form>
                          </td>
                          <td></td>
                      </tr>
                  </table>
                </div>";
                }
    
                mysqli_close($link);
        ?>
            </div>
    </main>

</html>