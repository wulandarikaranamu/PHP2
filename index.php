<?php 
$nilai = 80;
if($nilai >=85 and $nilai <= 90){
	$predikat = "A";
}
elseif($nilai>=80){
	$predikat = "A-";
	$status = "lulus";
}
elseif($nilai >= 75){
	$predikat = "B";
	$status = "lulus";
}
elseif($nilai>=70){
	$predikat = "B-";
	$status = "lulus";
}
elseif($nilai>=60){
	$predikat = "C";
	$status = "mengulang";
}
else{
	$predikat = "E";
	$status = "mengulang tahun depan";
}
echo "nilai anda =",$nilai;
echo "predikat anda =",$predikat;
echo "status anda =",$status;

 ?>
