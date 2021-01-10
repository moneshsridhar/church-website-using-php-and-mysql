<?php

if(isset($_POST['submit']))
 {
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$msg=$_POST['msg'];

 	$to='moneshofficial@gmail.com';
 	$subject='FeedBack Form';
 	$message="Name: ".$name."/n"."Wrote the following: "."\n\n".$msg;
 	$header="From= ".$email;

 	if(mail($to,$subject,$message,$header)){
 		echo<h1>"Sent Successfully!Thank You"</h1>;
 	}
 	else{
 		echo"Something went wrong ";
 	}
 }
?>
