<?php
/*ID: 602110193
Name: yucaiwen
Wechat: yucaiwen*/
echo"Input number of data: ";
fscanf(STDIN,"%d",$n);
for($i=1;$i<=$n;$i++){
	echo"Input score ",$i,": ";
	fscanf(STDIN,"%f",$a[]);
}foreach($a as$s){
$sum+=$s;
}echo"The average score for ";
foreach($a as$j=>$s){
		if($j>0)$d=", ";
		echo$d,$s;
}echo" = ",$sum/count($a);
?>