<?php

	$content = file_get_contents("second_lab.html");
	$arrayOfTegs = array(
		array("{TIME}",date('H:i:s')),
		array("{DATA}",date('l jS \of F Y')),
		array("{IP}",$_SERVER['REMOTE_ADDR'])
	);
	for ($i=0;$i<count($arrayOfTegs);$i++)
	{
		$content=str_replace($arrayOfTegs[$i][0],$arrayOfTegs[$i][1],$content);
	}
	echo $content;
?>