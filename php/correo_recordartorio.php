<?php
include 'conn.php';

$id_u =$_GET['id'];
$con = conectar();
$sql = "SELECT * FROM eventos WHERE idevento ='$id_u'";


$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


$consulta="SELECT COUNT(*) FROM asistencia WHERE idevento ='$id_u'";

$query2 = mysqli_query($con, $consulta);
$row2 = mysqli_fetch_array($query2);
echo $row2['correo'];


for($i=0; $i< count($arraycorreos); $i++){

    $to= $arraycorreos;
    $subject = 'Recuerda que tienes un evento';
	$from = 'info@xyz.com';
	$header = 'MIME-Version 1.0'."\r\n";
	$header.="Content-type: text/html; charset=iso-8859-1\r\n";
	//$header.="X-Mailer: PHP/".phpversion();//esto me genera error
    $header.= 'From: info@xyz.com'."\r\n";
	
$message='<html>
<body>
	<h1 style="color:#1d1d1d">Recordatorio del evento</h1>
	<p>Recuerda que tienes que guardar tu codigo QR para poder marcar asistencia</p>
	<h3>Detalles</h3>
	<table>
		<thead>
			<tr>
				<td>Nombre del evento</td>
				<td>Costo</td>
				<td>Direccion</td>
			</tr>
		</thead>
		<tbody>';
        $message.='<tr><td>'. $row['nombre'].'</td>';
        $message.='<td>'.$row['costo'].'</td>';
        $message.='<td>'. $row['direccion'].'</td>';

    
    $message.='</tbody></table>';
    $message.='<h2></h2> 
	 </body>
	 </html>';
}

if(mail($to, $subject, $message, $header)){
	
}else{
	echo 'no se puede enviar el mail';
}

?>