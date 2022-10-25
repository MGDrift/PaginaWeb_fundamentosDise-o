<?php include("template/cabecera.php"); ?>

<?php
$serverName = "DESKTOP-R1JVMO4\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"SQLQueryReto");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM reserva";

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

if( sqlsrv_fetch( $stmt ) === false) {
    die( print_r( sqlsrv_errors(), true));
}

$cod_reserva = sqlsrv_get_field( $stmt, 0);
echo "cod_reserva: $cod_reserva - ";

$fecha = sqlsrv_get_field( $stmt, 1);
$fecha = $fecha->format('d/m/Y');
echo "fecha: $fecha - ";

$num_invitados = sqlsrv_get_field( $stmt, 2);
echo "num_invitados: $num_invitados - ";

$precio_reserva = sqlsrv_get_field( $stmt, 3);
echo "precio_reserva: $precio_reserva";

$salon = sqlsrv_get_field( $stmt, 4);
echo "salon: $salon";
?>



<?php include("template/pie.php"); ?>