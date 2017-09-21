<!--
制作简单的看书系统
-->
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">

    #ourword{
        background-color:black;
        color:white;
        text-align:center;
        padding:15px;
      }
    #good{
        border-color:#6495ED;
		    border:10px solid #6495ED;
		    height:60px;
		    width:600px;
		    position:absolute; left:355px; top:200px;
	    }
	  #better{      
        background-color: #778899;
		    color:white;
		    height:60px;
		    width:100px;
		    border:0;
		    position:absolute; left:250px; top:200px;
	    }
    #itsword{
        color:black;
        font-size:-10px;
        position:absolute;top:30px;left:625px;
      }
   
   a{ color:black;font-size:15px;text-decoration: none;}  
   a:hover{ color:blue;text-decoration: none;}
   a:active{ color:black;text-decoration: none;}

</style>
</head>
<body>
<h1>
	<?php
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "姓名是必填的";
   } else {
     $name = test_input($_POST["name"]);
     // 检查姓名是否包含字母和空白字符
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "只允许字母和空格"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "电邮是必填的";
   } else {
     $email = test_input($_POST["email"]);
     // 检查电子邮件地址语法是否有效
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
       $emailErr = "无效的 email 格式"; 
     }
   }
     
   if (empty($_POST["gender"])) {
     $genderErr = "性别是必选的";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

        if(array_key_exists('submit',$_POST)){
        	echo '你已成功登陆';
        }

		if(array_key_exists('cartoon',$_POST))
		{
			
			$bookName=$_POST['cartoon'];
			$bookName=iconv('UTF-8','GBK',$bookName);
			$myfile = fopen("cartoon2/".$bookName.".html", "r");
			if($myfile==null)
				echo '漫画不存在';
			else
			{
				$size=filesize("cartoon2/".$bookName.".html");
				$box=fread($myfile,$size);
				echo $box;
				fclose($myfile);
			}
		}
	?>
</h1>

<form action="5.php" method="post">

<input id="good" type="text" name='cartoon'>
<input id="better" type="submit" value="按漫画名称查找！">

</form>
<div id="itsword">
<a href="http://localhost/carroon%E9%A6%96%E9%A1%B5.html#tips";>
<strong><big>点击回到漫画首页</big></strong></a>
</div>

</body>
</html>




