<?php
include "../Control/Result.php"
?>

<?php

setcookie("user_detect","visited",time()+86400*7,"/");
if(isset($_COOKIE["user_detect"])){
    echo "You have visited me before";
}
else{
    echo "You  visit me first time";
}
?>


<html>
    <head>
        <h2>Registration Form</h2>  
    </head>
    <body>
        <form action=""  method="post" enctype="multipart/form-data">
            <table>
              <tr>
                  <td> <label for="fname">First name:</label></td>
                  <td> <input type="text" id="fname" name="fname">
                  <?php
                  echo $fnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                  <td> <label for="lname">Last name:</label> </td>
                  <td> <input type="text" id="lname" name="lname">
                  <?php
                  echo $lnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                <td> <label for="age">Age:</label> </td>
                <td> <input type="number" id="age" name="age"> 
                <?php
                  echo $ageerr;
                  ?></td>
            </tr>
         
 
         
         <tr>
            
        <td><input type="submit" name="Submit">
       <input type="reset" name="Reset"></td>
       </tr>

       <tr>
         <td></td>
         <td>
         <?php
                  echo $dataerr;
                  ?>

         </td>


       </tr>
            </table>
        </form>

    </body>
</html>