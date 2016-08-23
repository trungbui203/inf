<?php
	if(!isset($_REQUEST["b"])) $b="home";
	else $b=$_REQUEST["b"];
                switch ($b) {
                        case 'home':
                        		$class0="class='current'";
                        		$class1="";
                        		$class2="";
                        		$class3="";
                        		$class4="";
                              break;
                      
							  }
?>
<div align="center" class="tdmenu">
<ul class="glossymenu">
	<li <?=$class0?> ><a href="index.php" style="text-decoration: none; color:#000;"><b>Trang Chủ</b></a></li>
</ul>
</div>