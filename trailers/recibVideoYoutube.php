<?php
date_default_timezone_set("America/Republica Dominicana");
setlocale(LC_ALL,"es_ES"); 
require("config.php");

$fecha              = date("d-m-Y g:i a");
$nombreVideo   		= $_POST['nombreVideo'];
$urlVideo   		= $_POST['urlVideo'];
$descripcionVideo   =$_POST['descripcionVideo'];

//https://www.youtube.com/watch?v=MxhasqDtq1s
$cantidad_url_video 	= strlen($urlVideo);
if ($cantidad_url_video == '28') {
	$cortar_url 			= str_replace ('https://youtu.be/','',$urlVideo);
	$url_final_video 		= 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '41') {
	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '43') {
	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '58') {
	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '60') {
	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
}else{
echo "URL INVALIDA";
}

//Creando mi INSERT a BD
$queryInsert = ("INSERT INTO
videos(
	nombreVideo,
	urlVideo,
	descripcionVideo,
	fecha
)
VALUES (
	'" .$nombreVideo. "',
	'" .$url_final_video. "',
	'" .$descripcionVideo. "',
	'" .$fecha. "'
)");
$result = mysqli_query($con, $queryInsert);

header("Location:agregarVideo.php");

?>