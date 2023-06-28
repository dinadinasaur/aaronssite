<?php

//$myfile = fopen("bookings.txt", "w") or die("Unable to open file!");

$myfile = fopen("bookings.txt", "a") or die("Unable to open file!");


$txt = "\nName:    ".$_POST['name']." -> Email: ".$_POST['email']." -> Comments: ".$_POST['comments'];
    fwrite($myfile, $txt);
    fclose($myfile);


    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];
    
$printt = "<p>
    Thank you, <b>$name</b>, for reaching out in regards to booking. You have submitted the following request: <br>
    <tt>$comments</tt> <br>
    We will reply to you at <i>$email</i>.
    </p>";
    
echo $printt;


?>