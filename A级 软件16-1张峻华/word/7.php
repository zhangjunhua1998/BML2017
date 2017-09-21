<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>
	<?php
		if(array_key_exists('chat',$_POST))
		{

			$chat=$_POST['chat'];
			$chat=iconv('UTF-8','GBK',$chat);
			if(is_readable("word/".$chat.".html"))
			{
				$myfile = fopen("word/".$chat.".html", "r");
				$size=filesize("word/".$chat.".html");
				$box=fread($myfile,$size);
				$box=iconv('GBK','UTF-8',$box);
				echo $box;
				fclose($myfile);
			}
			
		else
		    {
			echo '无';
		    }
	    } 
	?>
</h1>
<form action="7.php" method="post">

<input type="text" name='chat'>
<input type="submit" value="查找">

</form>

</body>
</html>