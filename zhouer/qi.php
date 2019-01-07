<?php 
for($i=1;$i<=10;$i++)
{
	for($j=1;$j<=10;$j++)
	{
		if($j%2==0)
		{
			echo "□";
		}
		else
		{
			echo "■";
		}
	}
	echo "<br/>";
}
?>