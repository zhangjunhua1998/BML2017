<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>
	AI de PHP
	<?php
		if(array_key_exists('chat',$_POST))
		{

			$chat=$_POST['chat'];
			$chat=iconv('UTF-8','GBK',$chat);
			if(is_readable("cartoon1/".$chat.".html"))
			{
				$myfile = fopen("cartoon1/".$chat.".html", "r");
				$size=filesize("cartoon1/".$chat.".html");
				$box=fread($myfile,$size);
				
				echo $box;
				fclose($myfile);
			}
			
		else
		    {
			echo '无';
		    }
	    } 








	    else if(array_key_exists('cartoon',$_POST))
		{

			$cartoon=$_POST['cartoon'];
			$cartoon=iconv('UTF-8','GBK',$cartoon);
			if(is_readable("bin/".$cartoon.".html"))
			{
				$myfile = fopen("bin/".$cartoon.".html", "r");
				$size=filesize("bin/".$cartoon.".html");
				$box=fread($myfile,$size);
				
				echo $box;
				fclose($myfile);
			}
			
		else
		    {
			echo '无此漫画';
		    }
	    } 
	?>
</h1>

</body>
</html>