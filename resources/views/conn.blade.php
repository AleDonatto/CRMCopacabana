
<?php
    //$conn = new PDO("sqlsrv:Server=127.0.0.1DONATTO\SQLEXPRESS;Database=Escuela;","root","abcd");

    $conexion = new PDO("sqlsrv:Server=DONATTO\SQLEXPRESS,1433;Database=crm;","donatto","abcd");

    //$usuario = $_POST['user'];
    //$password = $_POST['password'];

    //echo "El Usuario es:  $usuario\n\n"."Su contraseña: $password\n\n";


    $sql = "SELECT * From Usuarios";
    $array = $conexion -> prepare($sql);
	$array -> execute();

    while($result = $array -> fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
		echo '<td>'.$result['idUser'].'</td>';
		echo '<td>'.$result['Nombre'].'</td>';
		echo '<td>'.$result['Apellidos'].'</td>';
		echo '<td>'.$result['Nick'].'</td>';
        echo '<td>'.$result['Contrasena'].'</td>';
        echo '<td>'.$result['PerVentas'].'</td>';
        echo '<td>'.$result['PerRecepcion'].'</td>';
        echo '<td>'.$result['PerAdmin'].'</td>';
        echo '<tr>';
    }
    $array -> closeCursor();

    /*foreach($conexion ->query($sql) as $value){
        echo '<tr>';
		echo '<td>'.$value['idUser'].'</td>';
		echo '<td>'.$value['NameUser'].'</td>';
		echo '<td>'.$value['Correo'].'</td>';
		echo '<td>'.$value['Password'].'</td>';
        echo '<td>'.$value['Tipo'].'</td>';
        echo '<tr>';
    }*/
?>
