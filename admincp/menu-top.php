<?php
if(!isset($_REQUEST["m"])) $b="mn";
	else $b=$_REQUEST["m"];
                switch ($b) {
                        case 'mn':
                        		$class0="class='current'";
                        		$class1="";
                        		$class2="";
                        		$class3="";
                        		$class4="";
                        		$class5="";
                              break;
                        case 'sp':
                        		$class1="class='current'";
                        		$class0="";
                        		$class2="";
                        		$class3="";
                        		$class4="";
                        		$class5="";
                              break;
                       
                     
                        case 'tintuc':
                             	$class5="class='current'";
                        		$class0="";
                        		$class1="";
                        		$class2="";
                        		$class3="";
                        		$class4="";
                              break;
                        case 'tintuc-insert':
                             	$class5="class='current'";
                        		$class0="";
                        		$class1="";
                        		$class2="";
                        		$class3="";
                        		$class4="";
                              break;
                        default: 
                             	$class0="class='current'";
                        		$class1="";
                        		$class2="";
                        		$class3="";
                        		$class4="";
                        		$class5="";
                              break;
                  }
?>
<div align="center" class="tdmenu">
<ul class="glossymenu">
	<li <?=$class0?> ><a href="?m=mn&b=nhomsp-list" style="text-decoration: none; color:#000;"><b>NHÓM &amp; LOẠI</b></a></li>
	<li <?=$class1?> ><a href="?m=sp&b=sp-list" style="text-decoration: none; color:#000;"><b>SẢN PHẨM</b></a></li>
	
</ul>
</div>
