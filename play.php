<?
session_start();
 $numbers1 = range(1, 16);
shuffle($numbers1);
$numbers2 = range(1, 8);
shuffle($numbers2);
   // echo $numbers1[0];
//}
if($_SESSION['los'] == 1){
//echo'';
}
else{
$a[1] ='/gra/drugi/7c044193ca.jpeg';
$a[2] ='/gra/drugi/8d7dcfc865.jpeg';
$a[3] ='/gra/drugi/75bf5eacd1.jpeg';
$a[4] ='/gra/drugi/189a08423d.jpeg';
$a[5] ='/gra/drugi/a29a28b686.jpeg';
$a[6] ='/gra/drugi/d56357de45.jpeg';
$a[7] ='/gra/drugi/d75347821c.jpeg';
$a[8] ='/gra/drugi/eb4a64773f.jpeg';
$a[9] ='/gra/drugi/7c044193ca.jpeg';
$a[10] ='/gra/drugi/8d7dcfc865.jpeg';
$a[11] ='/gra/drugi/75bf5eacd1.jpeg';
$a[12] ='/gra/drugi/189a08423d.jpeg';
$a[13] ='/gra/drugi/a29a28b686.jpeg';
$a[14] ='/gra/drugi/d56357de45.jpeg';
$a[15] ='/gra/drugi/d75347821c.jpeg';
$a[16] ='/gra/drugi/eb4a64773f.jpeg';
$_SESSION['aa']=$a[$numbers1[0]];
$_SESSION['ab']=$a[$numbers1[1]];
$_SESSION['ac']=$a[$numbers1[2]];
$_SESSION['ad']=$a[$numbers1[3]];
$_SESSION['ba']=$a[$numbers1[4]];
$_SESSION['bb']=$a[$numbers1[5]];
$_SESSION['bc']=$a[$numbers1[6]];
$_SESSION['bd']=$a[$numbers1[7]];
$_SESSION['ca']=$a[$numbers1[8]];
$_SESSION['cb']=$a[$numbers1[9]];
$_SESSION['cc']=$a[$numbers1[10]];
$_SESSION['cd']=$a[$numbers1[11]];
$_SESSION['da']=$a[$numbers1[12]];
$_SESSION['db']=$a[$numbers1[13]];
$_SESSION['dc']=$a[$numbers1[14]];
$_SESSION['dd']=$a[$numbers1[15]];
$_SESSION['los']=1;
}
$x1=($_GET['x']);
$y1=($_GET['y']);
$x2=($_GET['x1']);
$y2=($_GET['y1']);
if($x1==1 && $y1==1)
$p1=$_SESSION['aa'];
if($x1==1 && $y1==2)
$p1=$_SESSION['ab'];
if($x1==1 && $y1==3)
$p1=$_SESSION['ac'];
if($x1==1 && $y1==4)
$p1=$_SESSION['ad'];
if($x1==2 && $y1==1)
$p1=$_SESSION['ba'];
if($x1==2 && $y1==2)
$p1=$_SESSION['bb'];
if($x1==2 && $y1==3)
$p1=$_SESSION['bc'];
if($x1==2 && $y1==4)
$p1=$_SESSION['bd'];
if($x1==3 && $y1==1)
$p1=$_SESSION['ca'];
if($x1==3 && $y1==2)
$p1=$_SESSION['cb'];
if($x1==3 && $y1==3)
$p1=$_SESSION['cc'];
if($x1==3 && $y1==4)
$p1=$_SESSION['cd'];
if($x1==4 && $y1==1)
$p1=$_SESSION['da'];
if($x1==4 && $y1==2)
$p1=$_SESSION['db'];
if($x1==4 && $y1==3)
$p1=$_SESSION['dc'];
if($x1==4 && $y1==4)
$p1=$_SESSION['dd'];
if($x2==1 && $y2==1)
$p2=$_SESSION['aa'];
if($x2==1 && $y2==2)
$p2=$_SESSION['ab'];
if($x2==1 && $y2==3)
$p2=$_SESSION['ac'];
if($x2==1 && $y2==4)
$p2=$_SESSION['ad'];
if($x2==2 && $y2==1)
$p2=$_SESSION['ba'];
if($x2==2 && $y2==2)
$p2=$_SESSION['bb'];
if($x2==2 && $y2==3)
$p2=$_SESSION['bc'];
if($x2==2 && $y2==4)
$p2=$_SESSION['bd'];
if($x2==3 && $y2==1)
$p2=$_SESSION['ca'];
if($x2==3 && $y2==2)
$p2=$_SESSION['cb'];
if($x2==3 && $y2==3)
$p2=$_SESSION['cc'];
if($x2==3 && $y2==4)
$p2=$_SESSION['cd'];
if($x2==4 && $y2==1)
$p2=$_SESSION['da'];
if($x2==4 && $y2==2)
$p2=$_SESSION['db'];
if($x2==4 && $y2==3)
$p2=$_SESSION['dc'];
if($x2==4 && $y2==4)
$p2=$_SESSION['dd'];
//echo 'p1'.$p1.' ';
//echo 'p2'.$p2.' ';
if($p2==$p1){
//echo 'traf';
//$_SESSION['tablica']=array(0,0);
$_SESSION['tablica'][$x1][$y1] =1;
$_SESSION['tablica'][$x2][$y2] =1;
//$klucz = array_search($aa,  $_SESSION['tablica']);
}
if(($_GET['reset'])==1){
unset($_SESSION['tablica']);
unset($_SESSION['los']);
//$_SESSION['tablica']=array(0,0);
}
if($x2 >= 1){
echo "<META HTTP-EQUIV='Refresh' CONTENT='1; URL=play.php'>";
}

?>
<table>
<tr>
<td><a href="http://astrade.vdl.pl/gra/play.php?x=1&y=1<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==1 && ($_GET['y'])==1 || $_SESSION['tablica'][1][1] ==1 || ($_GET['x1'])==1 && ($_GET['y1'])==1)echo $_SESSION['aa'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=1&y=2<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==1 && ($_GET['y'])==2 || $_SESSION['tablica'][1][2] ==1 || ($_GET['x1'])==1 && ($_GET['y1'])==2)echo $_SESSION['ab'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=1&y=3<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==1 && ($_GET['y'])==3 || $_SESSION['tablica'][1][3] ==1 || ($_GET['x1'])==1 && ($_GET['y1'])==3)echo $_SESSION['ac'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=1&y=4<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==1 && ($_GET['y'])==4 || $_SESSION['tablica'][1][4] ==1 || ($_GET['x1'])==1 && ($_GET['y1'])==4)echo $_SESSION['ad'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td></tr>
<tr>
<td><a href="http://astrade.vdl.pl/gra/play.php?x=2&y=1<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==2 && ($_GET['y'])==1 || $_SESSION['tablica'][2][1] ==1 || ($_GET['x1'])==2 && ($_GET['y1'])==1)echo $_SESSION['ba'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=2&y=2<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==2 && ($_GET['y'])==2 || $_SESSION['tablica'][2][2] ==1 || ($_GET['x1'])==2 && ($_GET['y1'])==2)echo $_SESSION['bb'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=2&y=3<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==2 && ($_GET['y'])==3 || $_SESSION['tablica'][2][3] ==1 || ($_GET['x1'])==2 && ($_GET['y1'])==3)echo $_SESSION['bc'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=2&y=4<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==2 && ($_GET['y'])==4 || $_SESSION['tablica'][2][4] ==1 || ($_GET['x1'])==2 && ($_GET['y1'])==4)echo $_SESSION['bd'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td></tr>
<tr>
<td><a href="http://astrade.vdl.pl/gra/play.php?x=3&y=1<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==3 && ($_GET['y'])==1 || $_SESSION['tablica'][3][1] ==1 || ($_GET['x1'])==3 && ($_GET['y1'])==1)echo $_SESSION['ca'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=3&y=2<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==3 && ($_GET['y'])==2 || $_SESSION['tablica'][3][2] ==1 || ($_GET['x1'])==3 && ($_GET['y1'])==2)echo $_SESSION['cb'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=3&y=3<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==3 && ($_GET['y'])==3 || $_SESSION['tablica'][3][3] ==1 || ($_GET['x1'])==3 && ($_GET['y1'])==3)echo $_SESSION['cc'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=3&y=4<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==3 && ($_GET['y'])==4 || $_SESSION['tablica'][3][4] ==1 || ($_GET['x1'])==3 && ($_GET['y1'])==4)echo $_SESSION['cd'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td></tr>
<tr>
<td><a href="http://astrade.vdl.pl/gra/play.php?x=4&y=1<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==4 && ($_GET['y'])==1 || $_SESSION['tablica'][4][1] ==1 || ($_GET['x1'])==4 && ($_GET['y1'])==1)echo $_SESSION['da'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=4&y=2<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==4 && ($_GET['y'])==2 || $_SESSION['tablica'][4][2] ==1 || ($_GET['x1'])==4 && ($_GET['y1'])==2)echo $_SESSION['db'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=4&y=3<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==4 && ($_GET['y'])==3 || $_SESSION['tablica'][4][3] ==1 || ($_GET['x1'])==4 && ($_GET['y1'])==3)echo $_SESSION['dc'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td><td><a href="http://astrade.vdl.pl/gra/play.php?x=4&y=4<?php echo '&x1='.$x1.'&y1='.$y1.'';?>"><img alt="" src="<?php if(($_GET['x'])==4 && ($_GET['y'])==4 || $_SESSION['tablica'][4][4] ==1 || ($_GET['x1'])==4 && ($_GET['y1'])==4)echo $_SESSION['dd'];  else echo '/gra/Tux.jpg';?>" width="95" height="130"></a></td></tr>
</table>
<a href="http://astrade.vdl.pl/gra/play.php?reset=1">reset</a>
