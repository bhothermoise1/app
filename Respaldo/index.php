<?php 
$db_host = 'localhost';
$db_name = 'school';
$db_user = 'root';
$db_pass  = '';


$fecha = date("Ymd-His");

$salida_sql = $db_name.'_'.$fecha.'.sql';

 $dump = "C:\wamp\bin\mysql\mysql5.5.24\bin\mysqldump --user=".$db_user." --password=".$db_pass." --host=".$db_host." ".$db_name." > $salida_sql";
 system($dump, $output);

 $zip = new ZipArchive();
$salida_zip = $db_name.'_'.$fecha.'.zip';
if($zip->open($salida_zip, ZIPARCHIVE:: CREATE) === true)  {

	$zip->addFile($salida_sql);
	$zip->close();
	unlink($salida_sql);

	header("Location: $salida_zip");
}else {


	echo 'Error en la Descarga';
}



 ?>