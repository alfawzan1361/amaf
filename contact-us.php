<?php
    $_POST['submit'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $msg=$_POST['msg'];

      $to='a@amaf.sa';
      $subject="amaf.sa_Contact_Us_Visitor";
      $message="Name: $fname $lname.\n"."Message: \n $msg.\n";
      $headers="From: ".$email;

    
      mail($to, $subject, $message, $headers);
    
    //   if(mail($To, $subject, $message, $headers)){
    //     echo '<script type="text/javascript">';
    //     echo 'alert("Thanks '.$fname.' for contacting us, you willbe reached shortly.")';
    //     echo '</script>';
    //   }
    //   else{
    //     echo '<script type="text/javascript">';
    //     echo ' alert("JavaScript Alert Box by PHP")'; 
    //     echo '</script>';
    //   }
    // }
    //header("Location: index.html");
 ?>