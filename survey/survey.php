<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = 'Web Design Form Rating';
    $rating = $_POST['number'];
    $impression = $_POST['dropdown'];
    $proud = $_POST['radio'];
    $fav = $_POST['check'];
    $comments = $_POST['comments'];
    $formcontent="From: $name \n Rating: $rating \n Inpression: $impression \n Proud: $proud \n Favourite part: $fav \n Additional comments: $comments \n";
    $recipient = "business@thatbassistk.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='./index.php' style='text-decoration:none;color:#ff0099'> Return Home</a>";
?>
