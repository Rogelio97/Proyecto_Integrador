<?php
//*******FUNCION PRINCIPAL PARA LA CONEXION A LA BASE DE DATOS MySQL*********//
function conexion()
{ 
// ** Ajustes de MySQL ** // 
global $DB_HOST; 
global $DB_USER; 
global $DB_PASSWORD; 
global $DB_NAME; 
/** Host de MySQL*/ 
$DB_HOST = 'localhost';
/** Nombre de usuario de MySQL */ 
$DB_USER = 'root';
/** Password de MySQL */ 
$DB_PASSWORD = '';
/** Nombre de nuestra base de datos */ 
$DB_NAME = 'questacademy';
/**AlmK)##Gh8XhJDBnwH8H */

$mysqli = @new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME); 
 if (mysqli_connect_errno()) {
    printf(error_db_connect());
    exit();
    }
    return $mysqli;
}

?>

