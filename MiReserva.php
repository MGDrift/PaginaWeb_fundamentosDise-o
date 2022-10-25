<?php include("template/cabecera.php"); ?>

            <div class="jumbotron">
                <h1 class="display-3">Reservas pendientes</h1>
                <p class="lead">Información de las reservas:</p>
                <hr class="my-2">
            </div>


<?php

$serverName = "DESKTOP-R1JVMO4\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"SQLQueryReto");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM reserva";

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}

while( $obj = sqlsrv_fetch_object( $stmt)) {
    echo '<div class="col-md-3">
            <div class="card">
                <!-- en src debe ir la dirección de las imagenes para que aparezcan -->
                <img class="card-img-top" width="100%" height="200" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt=""> 
                <div class="card-body">
            
                    <h4 class="card-title">Codigo Evento: '.$obj->cod_evento.'</h4>
                    <p>Codigo reserva: '.$obj->cod_reserva.', Fecha: '.$obj->fecha->format('d/m/Y').'</p>
                    <p>Num_invitados: '.$obj->num_invitados.', Precio_reserva: '.$obj->precio_reserva.'</p>
                    <p>Salon: '.$obj->salon.'</p>
            
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver más
                    </button>
            
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Elige la fecha de tu reserva:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">reservar</button>
                        </div>
                        </div>
                    </div>
                    </div>
            
                </div>
            </div>
        </div>';
}

// Close the connection.
sqlsrv_close( $conn );
?>

<?php include("template/pie.php"); ?>