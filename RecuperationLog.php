<?php
// Initialiser la session
session_start();

$data = file_get_contents("http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G1A0");



$data_tab = str_split($data,33);
$trame = array();
$val = array();
$j=0;



for($i=0, $size=count($data_tab); $i<$size; $i++){
$dif= $size - $i;
if($dif<=21){
$trame[$j] = $data_tab[$i];



// décodage avec des substring
$t = substr($trame[$j],0,1);
$o = substr($trame[$j],1,4);



// décodage avec sscanf
list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($trame[$j],"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");



//echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
$val[$j] = $v;
$j=$j+1;
}

}



// décodage avec des substring
$t1 = substr($trame[19],0,1);
$o1 = substr($trame[19],1,4);




list($t1, $o1, $r1, $c1, $n1, $v1, $a1, $x1, $year1, $month1, $day1, $hour1, $min1, $sec1) = sscanf($trame[20],"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");


$moy= ($val[0]+$val[1]+$val[2]+$val[3]+$val[4]+$val[5]+$val[6]+$val[7]+$val[8]+$val[9]+$val[10]+$val[11]+$val[12]+$val[13]+$val[14]+$val[15]+$val[16]+$val[17]+$val[18]+$val[19])/20;
//FIN TRAMES



?>