<?php
include ("../Control/RegistrationCheck.php");
?>


<html>
    <head>
        <h2>Registration Form</h2>  
    </head>
    <body>
        <form action=""  method="post"  onsubmit="return myform2()">
            <table>
              <tr>
                  <td> <label for="fname">First name:</label></td>
                  <td> <input type="text" id="fname" name="fname" onkeyup="onclicktext()">
                  <?php
                  echo $fnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                  <td> <label for="lname">Last name:</label> </td>
                  <td> <input type="text" id="lname" name="lname" onkeyup="onclicktext()">
                  <?php
                  echo $lnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                <td> <label for="age">Age:</label> </td>
                <td> <input type="number" id="age" name="age" min=1 onkeyup="onclicktext()"> 
                <?php
                  echo $ageerr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="designation">Designation:</label> </td>
                <td><input type="radio" id="juniorprogrammar" name="designation" value="Junior Programmer" onkeyup="onclicktext()">
                <label for="juniorprogrammer">Junior Programmer</label>
                <input type="radio" id="seniorprogrammar" name="designation" value="Senior Programmer" onkeyup="onclicktext()">
                    <label for="seniorprogrammer">Senior Programmer</label>
                <input type="radio" id="projectload" name="designation" value="Project Load" onkeyup="onclicktext()">
                    <label for="projectload">Project Load</label>
                    <?php
                  echo $deserr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="preferredlanguage">Preferred Language</label> 
                <td><input type="checkbox" id="java" name="Java" value="Java"onkeyup="onclicktext()" >
                <label for="java">Java</label>
                <input type="checkbox" id="php" name="PHP" value="PHP" onkeyup="onclicktext()">
                    <label for="php">PHP</label>
                <input type="checkbox" id="c++" name="C++" value="C++" onkeyup="onclicktext()">
                    <label for="c++">C++</label>
                    <?php
                  echo $plerr.$pl1.$pl2.$pl3;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="email">Email:</label> </td>
                <td> <input type="text" id="email" name="email" onkeyup="onclicktext()"> 
                <?php
                  echo $emailerr;
                  ?></td>
            </tr> 
            <tr>
              <td> <label for="password">Password:</label> </td>
              <td> <input type="password" id="password" name="password" onkeyup="onclicktext()"> 
              <?php
                  echo $passerr;
                  ?></td>
          </tr>
    
          <tr>
          <td>Please choose a file :</td>
          <td><input type="file"></td>
          </tr>
 
    
         <tr>
        <td><input type="submit" name="Submit">
       <input type="reset" name="Reset"></td>
       </tr>
            </table>
        </form>

    </body>
</html>


<script>
    
    function myform2() {
        var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    

    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var passw=  /^[A-Za-z]\w{7,14}$/;
    var passcheck=passw.test(pass);
   

    
    if (fname == "" ) {
    alert("Please fill out first name");
      return false;
    }
    if (fname.length<3 ) {
        alert("Please enter a valid first name");
       return false;
     }
   if ( lname == "") {
    alert("Please fill out last name");
      return false;
    }

    if (lname.length<3 ) {
        alert("Please enter a valid last name");
       return false;
     }
     

     if (document.getElementById("juniorprogrammar").checked == false &&  document.getElementById("juniorprogrammer").checked == false &&  document.getElementById("projectload").checked == false)
  {
    alert("Please select yuor designation");
    return false;
  }

  if (document.getElementById("java").checked == false &&  document.getElementById("php").checked == false &&  document.getElementById("c++").checked == false)
  {
    alert("Please select yuor preferred languages");
    return false;
  }
  if ( email == "") {
    alert("Please fill out your email");
     return false;
   }


   if(!res)
    {
        alert("Email format is not correct");
      return false; 
    }

    if ( pass == "") {
        alert("Please fill out your password");
       return false;
     }
  
  
     if(!passcheck)
      {
        alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!");
        return false; 
      }
      
return false;


  }


    </script>