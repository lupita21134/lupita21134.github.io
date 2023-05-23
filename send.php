<?php


//varible setting
 $name= $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $message = $_REQUEST['comment'];
 $subject = "Message from Contact form !";

 $to ="lupitaksb721@gmail.com";  // change receiving email id 

 $content = "Name : ". $name. "\r\nContact email : ". $email. "\r\n \r\ncomment : \r\n \r\n".$comment ; // name [break] email [break] message



// check input fields
if ( empty($name)|| empty($email)|| empty($comment))
{
echo"<script type='text/javascript'>alert('Please fill all correct');
    window.history.go(-1);
    </script>";
}
else 
{ mail($to,$subject,$content);

    echo"<script type='text/javascript'>alert('Your message sent succesfully ');
    window.history.go(-1);
    </script>";
}


?>
?>
