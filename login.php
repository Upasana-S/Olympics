<html>
<script>
<?php

	print(" Username: ".$_POST['user']." \n");$name=$_POST['user'];
	setcookie("name",$name, time()+36000);
	print(" password: ".$_POST['password']." \n");
	
	$link=mysql_connect("localhost","root","");
	if(!$link)
		die(mysql_error());
	mysql_select_db("user");
	$sql="SELECT * FROM user WHERE uname='".$name."'";
	$ret=mysql_query($sql,$link);
	print($ret.'\n');
	if(!$ret)
	{print("IDK LOL \n");die(mysql_error());}
	else
		{$arr= mysql_fetch_assoc($ret);
			print("name:".$arr[0]." PWD: ". $arr[1]);
			if($arr['pwd']==$_POST['password'])
			{ 
				header("Location: mypage.html");
			}
			else
				{header("Location: login.html");
				document.write("Password is Incorrect, try again");
				
					
				}
		}
?>
</script>
</html>