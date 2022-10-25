<?php include("../template/cabecera.php");?>

<?php 


$txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
$txtTipoEvento=(isset($_POST["txtTipoEvento"]))?$_POST["txtTipoEvento"]:"";
$txtComida=(isset($_POST["txtComida"]))?$_POST["txtComida"]:"";
$intNumInvitados=(isset($_POST["intNumInvitados"]))?$_POST["intNumInvitados"]:"";
$dateFecha=(isset($_POST["dateFecha"]))?$_POST["dateFecha"]:"";
$intHora=(isset($_POST["intHora"]))?$_POST["intHora"]:"";
$accion=(isset($_POST["accion"]))?$_POST["accion"]:"";

echo $txtID."<br/>";
echo $txtTipoEvento."<br/>";
echo $txtComida."<br/>";
echo $intNumInvitados."<br/>";
echo $dateFecha."<br/>";
echo $intHora."<br/>";
echo $accion."<br/>";

switch($accion){
    case "Agregar":
        echo "Presionado el boton agregar";
        break;

    case "Modificar":
        echo "Presionado el boton modif";
        break;

    case "Cancelar":
        echo "Presionado el boton cancaelar";
        break;


}


?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de la reserva
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

            <div class = "form-group">
            <label for="txtID">ID:</label>
            <input type="text" class="form-control" name="txtID" id="txtID" placeholder="0000">
            </div>

            <div class="form-group">
            <label for="txtTipoEvento">Tipo de evento:</label>
            <input type="text" class="form-control" name="txtTipoEvento" id="txtTipoEvento" placeholder="Tipo de evento">
            </div>

            <div class="form-group">
            <label for="txtComida">ID Comida:</label>
            <input type="text" class="form-control" name="txtComida" id="txtComida" placeholder="0000">
            </div>

            <div class="form-group">
            <label for="intNumInvitados">Numero de invitados:</label>
            <input type="int" class="form-control" name="intNumInvitados" id="intNumInvitados" placeholder="0">
            </div>

            <div class="form-group">
            <label for="dateFecha">Fecha:</label>
            <input type="date" class="form-control" name="dateFecha" id="dateFecha" placeholder="00/00/0000">
            </div>

            <div class="form-group">
            <label for="intHora">Hora:</label>
            <input type="int" class="form-control" name="intHora" id="intHora" placeholder="00:00">
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
            </div>

            </form>
        </div>
    </div> 
</div>

<div class="col-md-7">
    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo Evento</th>
                <th>id Comida</th>
                <th>Num Invitados</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1204</td>
                <td>Fiesta infantil</td>
                <td>1203</td>
                <td>56</td>
                <td>15/06/23</td>
                <td>15:00</td>
            </tr>
        </tbody>
    </table>
</div>



<?php include("../template/pie.php");?>

