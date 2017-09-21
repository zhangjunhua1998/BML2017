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

   echo "<h2>您的输入：</h2>";
   echo $name;
   echo "<br>";
   echo $email;
   echo "<br>";
   echo $gender;
?>
</body>
</html>




