<?php
$fname=$lname=$age=$pass=$pl1=$pl2=$pl3=$email="";
$fnameerr=$lnameerr=$ageerr=$passerr=$deseer=$plerr=$emailerr="";

if(isset($_POST["Submit"])){

$fname=$_POST["fname"];

if(empty($fname) || strlen($fname)<6){

$fnameerr= "->please enter a valid a name";

}
else{
    $fnameerr="->your first name is ".$fname;
}

$lname=$_POST["lname"];

if(empty($lname) || strlen($lname)<6){

$lnameerr= "->please enter a valid a name";

}
else{
    $lnameerr="->your last name is ".$lname;
}


$age=$_POST["age"];
if(empty("$age")){

    $ageerr= "->please enter your age";
    
    }
    else{
        $ageerr="-> your age is ".$age;
    }

    $pass=$_POST["password"];

    if(empty($pass) || strlen($pass)<8){

        $passerr= "->please enter a password upto 8 letter/character";
        
        }
        else{
            $passerr="->your password is ".$pass;
        }

   
    
    if(isset($_POST["designation"])){
        $deserr="-> you have selected ".$_POST["designation"];
    }
    else{
        $deserr="->you have not selected any designation";
    }

    if(isset($_POST["Java"])  || isset($_POST["PHP"])   || isset($_POST["C++"])){
        $plerr="->you have selected ";
        if(isset($_POST["Java"])){
          $pl1=$_POST["Java"].",";
          
        }
        if(isset($_POST["PHP"])){
            $pl2=$_POST["PHP"].",";
          }
        if(isset($_POST["C++"])){
            $pl3=$_POST["C++"];
          }

    }
    else{
        $plerr="->you have not selected any preferred language";
    }

    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="->please enter a valid email";
}
else{
    $emailerr= "->your email is ".$email;
}

}

?>