<?php
	$v1 = $_POST ['v1'];
	$v2 = $_POST ['v2'];
	$v3 = $_POST ['v3'];
	if ($v1 > $v2 && $v1 > $v3)
	{
		if($v2 >= $v3)
		{
			echo "Sequencia: $v3 - $v2 - $v1";
		}
		else
		{
			echo "Sequencia: $v2 - $v3 - $v1";			
		}
	}
	else if ($v2 > $v1 && $v2 > $v3)
	{
		if($v1 >= $v3)
		{
			echo "Sequencia: $v3 - $v1 - $v2";
		}
		else
		{
			echo "Sequencia: $v1 - $v3 - $v2";			
		}
	}
	else if ($v3 > $v1 && $v3 > $v1)
	{
		if($v1 >= $v2)
		{
			echo "Sequencia: $v2 - $v1 - $v3";
		}
		else
		{
			echo "Sequencia: $v1 - $v2 - $v3";			
		}
	}
	else
	{
		echo "Sequencia: $v1 - $v2 - $v3";
	}
?>