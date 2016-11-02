<?php

	$name=$_POST['user'];
	$pwd=$_POST['password'];
	setcookie("name",$name, time()+36000);
	print("Hi, ". $_COOKIE['name']);
	$link=mysql_connect("localhost","root","");
	if(!$link)
		die(mysql_error());
	mysql_select_db("user");
	$sql="INSERT INTO user (uname,pwd) VALUES ('".$name."','".$pwd."')";
	$ret=mysql_query($sql,$link);
	if(!$ret)
	{print("IDK LOL \n");
		{die(mysql_error());
		 header("Location: signup.html");
		}
	}	
	else
		{  
		   header("Location: mypage.html");
		}
?>