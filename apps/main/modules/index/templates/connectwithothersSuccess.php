<TABLE border="0" cellspacing="0" cellpadding="5">
 <TR >
  <TD valign="top"> <font size="2">
    <br>

<font face="Arial" size="2">
<center><font color=blue><font size=+2>Exercise Connection</font></font><br>
<font size=+1><i>Find People & Groups to Exercise With, Post Searching For Messages & More!</i></font></center><hr>

<br>
Please click on your location below to search for people to exercise with, find exercise interest groups and more.
<br><br><br>

<pre>
<?php

//print_r($row);
//die();
if($list == true){
   foreach($row as $key=>$value){
		echo "<a href=\"?id={$row[0]['id']}\">{$row[0]['title']} - {$row[0]['city']}, {$row[0]['state']}</a><br>";
	}
	
}else{
	foreach($row as $key=>$value){
	  echo "<a href=\"?id={$row[0]['id']}\">{$row[0]['title']} - {$row[0]['city']}, {$row[0]['state']}</a><br>";
	}
}
	
return;
?>


<br><br>
<font color="blue"><U>Lowe's Distribution Center - Osceola County, Fla. </u></font><br>

<br><br>
<font color="blue"><U>Lowe's Store - North Charleston, SC </u></font><br>
 <Br><br><font color="blue"><U>Lowe's Store - Goose Creek, SC </u></font><br>

 <Br><br>
<img src="/images/nutrition/Connect/smile.jpg" align=right>


</font>
</TD><td valign="top"><img src="/images/nutrition/Connect/connect.jpg"></td></tr></table>
